<?php

namespace App\Http\Controllers;
use App\DataSources;

use Illuminate\Http\Request;

class DatasourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSource = DataSources::all();
        return view('datasource.index', compact('dataSource'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasource.create');
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
            'datasource' => 'required'
        ]);

        $dataSource = new DataSources([
            'data_source' => $request->get('datasource')
        ]);
        $dataSource->save();

        return redirect('/datasource')->withStatus(__('Data Source successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataSource = DataSources::find($id);
        return view('datasource.show', compact('dataSource')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataSource = DataSources::find($id);
        return view('datasource.edit', compact('dataSource')); 
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
        $dataSource = DataSources::find($id);
        $dataSource->data_source = $request->input('datasource');
        $dataSource->save();

        return redirect('/datasource')->withStatus(__('Data Source successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataSource = DataSources::find($id);
        $dataSource->delete();
        return redirect('/datasource')->with('success', 'Data Source deleted!');
    }
}
