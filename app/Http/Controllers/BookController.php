<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Category;



class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->paginate(10); 
        $categories = Category::all();
        return view('backend.dashboard.book.index', compact('books','categories')); 
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.dashboard.book.create', compact('categories')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tanggal_terbit' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $book = new Book();
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->penerbit = $request->penerbit;
        $book->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/buku'), $nama_gambar);
            $book->gambar = 'images/buku/' . $nama_gambar;
        }
        $book->save();
        $book->category()->attach($request->category_ids);
        

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);  
        $book->load('categories');
        return view('backend.dashboard.book.show', compact('book')); 
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id); 
        return view('backend.dashboard.book.edit', compact('book')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tanggal_terbit' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $book = Book::findOrFail($id);
        
        $bookData = $request->except('gambar');
        $bookData['tanggal_terbit'] = $request->tanggal_terbit;

        if ($request->hasFile('gambar')) {
            if ($book->gambar && Storage::exists($book->gambar)) {
                Storage::delete($book->gambar);
            }

            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/buku'), $nama_gambar);
            $bookData['gambar'] = 'images/buku/' . $nama_gambar;
        }

        $book->update($bookData);
        $book->categories()->sync($request->category_ids);
        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $book = Book::findOrFail($id);
            
            if ($book->gambar && file_exists(public_path($book->gambar))) {
                unlink(public_path($book->gambar));
            }
            
            $book->delete();
            return redirect()->route('books.index')
                            ->with('success', 'Buku berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('books.index')
                                ->with('error', 'Gagal menghapus buku. Buku mungkin sedang dipinjam.');
        }
    }
}
