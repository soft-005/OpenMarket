<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Session;


class categoryContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { //
        $this->validate($request,[
            'name' => 'required'
        ]);


        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('success', 'Category created successfully');

        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       $category = Category::find($id);
       $category->name = $request->name;
       $category->save();

       return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
       $category = Category::find($id);

       foreach($category->posts as $post){
            $post->forceDelete();
       }
       $category->delete();
       
       return redirect()->route('categories');

    }

    
}
