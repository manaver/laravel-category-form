<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $available_categories = Category::all();

        $categories = Category::with('childrens')->whereNull('category_id')->get();

        return view('index', compact('categories', 'available_categories'));
    }

    public function addCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category_id' => 'nullable|integer'
        ]);

        $category = new Category();

        $category->name = $validated['name'];
        $category->category_id = $validated['category_id'] ?? null;

        $category->save();

        return redirect()->route('index');
    }
}
