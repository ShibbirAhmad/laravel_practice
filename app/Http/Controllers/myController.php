<?php

namespace App\Http\Controllers;

use App\myModel;
use Illuminate\Http\Request;

class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data=myModel::all();
         
         return view('site/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('site.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[     
                'name' => 'required|min:4',
                'roll'    =>  'required',
                'registration' => 'required',
                'gender'    => 'required'
           ];

        $this->validate($request,$rules);

        myModel::create($request->all());

      return redirect()->back()->with('success','user created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=myModel::find($id);

        return view('site.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data=myModel::find($id);

         return view ('site.edit',compact('data'));
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
        $rules=[     
            'name' => 'required|min:4',
            'roll'    =>  'required',
            'registration' => 'required',
            'gender'    => 'required'
       ];

    $this->validate($request,$rules);

      $getdata=myModel::find($id);
      $getdata->update($request->all());

  return redirect()->back()->with('success','your data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        myModel::where('id',$id)->delete();
        return redirect()->back()->with('success','one user deleted');
          
    }
}
