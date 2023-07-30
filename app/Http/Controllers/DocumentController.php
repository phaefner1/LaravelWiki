<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    
    public function index(Request $request)
    {
    	$query = $request->get('query');
    	$documents = Document::where('user_id', Auth::id())
                         ->where('name', 'like', '%'.$query.'%')
                         ->get();
    	return view('documents.index', ['documents' => $documents]);
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
	$request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);    
	    
	$document = new Document;
    	$document->name = $request->name;
	$document->content = $request->content;
	$document->user_id = auth()->id();
	$document->save();

    	return redirect('/documents');
    }

    public function show(Document $document)
    {
	\Log::info('User ID: ' . auth()->id());
	\Log::info('Document User ID: ' . $document->user_id);
	\Log::info('Authorization result: ' . ($this->authorize('view', $document) ? 'true' : 'false'));
	$this->authorize('view', $document);
    	return view('documents.show', ['document' => $document]);
        // return "Test";
    }

    public function destroy(Document $document)
    {
	$this->authorize('delete', $document);
        $document->delete();
    	return redirect('/documents');
    }

    public function edit(Document $document)
    {
	$this->authorize('update', $document);
        return view('documents.edit', ['document' => $document]);  
    }

    public function update(Request $request, Document $document)
    {
        $this->authorize('update', $document);

    	$validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

    	$document->name = $request->name;
    	$document->content = $request->content;
    	$document->save();

    	return redirect('/documents');
    }

}
