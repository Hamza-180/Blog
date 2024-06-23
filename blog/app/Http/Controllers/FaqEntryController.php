<?php

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
