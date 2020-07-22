<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileDump;
use App\DataSources;

class FiledumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fileDump = FileDump::paginate(20);
        return view('filedump.index', compact('fileDump'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datasource = DataSources::orderBy('data_source', 'desc')->get();
        return view('filedump.create')->with('datasource', $datasource);
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
            'file' => 'required|file|mimes:csv,txt,xls,xlsx,pdf,zip|max:1048576',
            'datasource' => 'required'
        ]);
        
        

        $fileDump = new FileDump;
        if($request->file('file')){
            $file = $request->file('file');

            $datasource = DataSources::where('id', $request->datasource)->value('data_source'); 

            $filename = $datasource.'_'.date('Y-m-d').'.'.$file->getClientOriginalExtension();
            $filePath = $request->file->move('storage/'.$filename);

            $fileDump->file_name = $filename;
            $fileDump->file_hash = md5_file($filePath);
        }
       
        $fileDump->data_source_id = $request->datasource;
        $fileDump->file_size = $request->file('file')->getSize();
        $fileDump->file_type = $request->file->getClientOriginalExtension();
        $fileDump->user_id = auth()->user()->id;
        $fileDump->save();

        return redirect('home')->withStatus(__('Uploaded successfully.'));
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
