<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Mengganti Kategori dengan Category

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Mengganti $kategori dengan $categories
        return view('backend.dashboard.category.index', compact('categories')); // Mengganti 'kategori' dengan 'categories'
    }

    public function create()
    {
        return view('backend.dashboard.category.create'); // Mengganti 'kategori' dengan 'category'
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_category' => 'required|string|max:255', // Mengganti 'nama_kategori' dengan 'name_category'
        ]);

        Category::create([
            'name_category' => $request->name_category, // Mengganti 'nama_kategori' dengan 'name_category'
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan'); // Mengganti 'kategori' dengan 'category'
    }

    public function edit(Category $category) // Mengganti Kategori dengan Category
    {
        return view('backend.dashboard.category.edit', compact('category')); // Mengganti 'kategori' dengan 'category'
    }

    public function update(Request $request, Category $category) // Mengganti Kategori dengan Category
    {
        $request->validate([
            'name_category' => 'required|string|max:255', // Mengganti 'nama_kategori' dengan 'name_category'
        ]);

        $category->update([
            'name_category' => $request->name_category, // Mengganti 'nama_kategori' dengan 'name_category'
        ]);

        return redirect()->route('backend.dashboard.category.index')->with('success', 'Kategori berhasil diperbarui'); // Mengganti 'kategori' dengan 'category'
    }

    public function destroy(Category $category) // Mengganti Kategori dengan Category
    {
        $category->delete(); // Mengganti 'kategori' dengan 'category'
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus'); // Mengganti 'kategori' dengan 'category'
    }
}