<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
   
    public function index()
    {
        $data = Content::first()->paginate(5);

        return view('content.index', compact('data'))->with('i', (request()->input('page', 1)-1) * 5);
    }

    public function create(Request $request)
    {
        return view('content.create');
    }

  
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        // ]);{{url('/admin/content?type=publicize')}}

        // Content::create($request->all());
        return redirect('/admin')
                         ->with('success', 'Created successfully');
    }

   
    public function show(Content $content)
    {
        return view('content.show', compact('content'));
    }

    
    public function edit(Content $content)
    {
        return view('content.edit', compact('content'));

    }

  
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $content->update($request->all());

        return redirect()->route('content.index')
                        ->with('SUCCESS', 'Updated successfully');

    }

   
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->route('content.index')
                        >with('SUCCESS', 'Deleted successfully');
    }
}
