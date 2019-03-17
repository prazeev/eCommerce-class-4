<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['categories'] = Category::paginate(10);
        return view('admin.categories.index')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'status'=>'required',
            'slug'=>'required|max:255',
            'keywords'=>'required|max:255'
        ]);

        $category= new Category;
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->slug=$request->slug;
        $category->keywords=$request->keywords;
        $category->Save();
        return back()->with('info','Added to category successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['categories']=Category::find($id);
        return view('admin.categories.view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories']=Category::find($id);
        return view('admin.categories.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'status'=>'required',
            'slug'=>'required|max:255',
            'keywords'=>'required|max:255'
        ]);
        $category=Category::find($id);
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->slug=$request->slug;
        $category->keywords=$request->keywords;
        $category->Save();
        
        return redirect()->action('CategoryController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
