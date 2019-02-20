<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cruds=\App\Crud::all();
        return view('index',compact('cruds')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $crud = new \App\Crud;
        $crud->title = $request->get('title');
        $crud->description = $request->get('description');
        $crud->publisher = $request->get('publisher');
        $crud->qty = $request->get('qty');

        if($request->file('foto') == "")
        {
            $crud->gambar = $crud->gambar;
        }
        else
        {
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("foto/", $fileName);
            $crud->foto = $fileName;
        }

        $crud->update();
        $crud->save();
        return redirect('/artikel')->with('success', 'Data buku telah ditambahkan');
        return redirect()->to('/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $crud = \App\Crud::find($id);
        return view('crudpost', compact('crud','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $crud = \App\Crud::find($id);
        return view('edit',compact('crud','id'));
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
        //
        $crud= \App\Crud::find($id);
        if($request->file('foto') == "")
        {
            $crud->foto = $crud->foto;
        } 
        else
        {
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("foto/", $fileName);
            $crud->foto = $fileName;
        }
        $crud->title = $request->get('title');
        $crud->description = $request->get('description');
        $crud->publisher = $request->get('publisher');
        $crud->qty = $request->get('qty');

        $crud->save();
        return redirect('/cruds')->with('success', 'Data buku telah diubah');
        return redirect()->to('/cruds');
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
        $crud = \App\Crud::find($id);
        $crud->delete();
        return redirect('cruds')->with('success','Data buku telah di hapus');
    }
}
