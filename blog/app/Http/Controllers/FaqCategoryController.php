<?php

// app/Http/Controllers/FaqCategoryController.php
namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::with('entries')->get();
        return view('faq.index', compact('categories'));
    }

    public function create()
    {
        return view('faq.create_category');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        FaqCategory::create($request->all());
        return redirect()->route('faq.index');
    }

    public function edit(FaqCategory $category)
    {
        return view('faq.edit_category', compact('category'));
    }

    public function update(Request $request, FaqCategory $category)
    {
        $request->validate(['name' => 'required']);
        $category->update($request->all());
        return redirect()->route('faq.index');
    }

    public function destroy(FaqCategory $category)
    {
        $category->delete();
        return redirect()->route('faq.index');
    }
}


// app/Http/Controllers/FaqEntryController.php
namespace App\Http\Controllers;

use App\Models\FaqCategory;
use App\Models\FaqEntry;
use Illuminate\Http\Request;

class FaqEntryController extends Controller
{
    public function create(FaqCategory $category)
    {
        return view('faq.create_entry', compact('category'));
    }

    public function store(Request $request, FaqCategory $category)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $category->entries()->create($request->all());
        return redirect()->route('faq.index');
    }

    public function edit(FaqEntry $entry)
    {
        return view('faq.edit_entry', compact('entry'));
    }

    public function update(Request $request, FaqEntry $entry)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $entry->update($request->all());
        return redirect()->route('faq.index');
    }

    public function destroy(FaqEntry $entry)
    {
        $entry->delete();
        return redirect()->route('faq.index');
    }
}

