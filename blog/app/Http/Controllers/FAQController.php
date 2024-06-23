<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQEntry;
use App\Models\FAQCategory;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQEntry::all();
        return view('faqs.index', compact('faqs'));
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:faq_categories,id',
            'question' => 'required',
            'answer' => 'required',
        ]);

        FAQEntry::create($request->all());

        return redirect()->route('faqs.index');
    }

    public function destroy(FAQEntry $entry)
    {
        $entry->delete();

        return redirect()->route('faqs.index');
    }
}
