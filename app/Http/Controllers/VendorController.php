<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use flash;


class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['vendors'] = Vendor::paginate(5);
        return view('admin.vendors.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendors.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $vendor=new Vendor;
        $vendor->name=$request->name;
        $vendor->address=$request->address;
        $vendor->description=$request->description;
        $vendor->phone=$request->phone;
        $vendor->email=$request->email;
        $vendor->color=$request->color;
        $vendor->save();

       $vendor->save( );
        return back()->with('info','Added to records successfully !!!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data['vendor']=Vendor::findOrfail(5);
      return view('admin.vendors.view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['vendor'] = Vendor::find($id);
        return view('admin.vendors.edit')->with($data);
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
            'address'=>'required|max:255',
            'description'=>'required',
            'phone'=>'required',
            'email'=>'required|max:255',
            'color'=>'required|max:10'
        ]);
        $vendor=Vendor::find($id);
        $vendor->name=$request->name;
        $vendor->description=$request->description;
        $vendor->phone=$request->phone;
        $vendor->email=$request->email;
        $vendor->color=$request->color;

        if ($vendor->save()) {
            flash('Vendor updated.')->success();
        }
        else {
            flash('Vendor update failed')->error();
        }

        return redirect()->action('VendorController@index');
    
    }

    /**
     * Remove the specified resource from storage.
     **/
    public function destroy($id)
    {
        //
    }
}

