<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
       public function index()
    {
        $documents = Document::all();
    	return view('documents.index', ['documents' => $documents]);
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $document = new Document;
    	$document->name = $request->name;
    	$document->content = $request->content;
    	$document->save();

    	return redirect('/documents');
    }

    public function show(Document $document)
    {
    	return view('documents.show', ['document' => $document]);
    }

    public function destroy(Document $document)
    {
        $document->delete();
    	return redirect('/documents');
    }

    public function edit(Document $document)
    {
    	return view('documents.edit', ['document' => $document]);
    }

    public function update(Request $request, Document $document)
    {
    	$document->name = $request->name;
    	$document->content = $request->content;
    	$document->save();

    	return redirect('/documents');
    }
}
