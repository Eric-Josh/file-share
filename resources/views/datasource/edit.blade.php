@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'datasource'
])
@section('head')

@endsection

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="{{ route('datasource.update', $dataSource->id) }}">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        <div class="form-group">
                            <label for="datasource">Data Source</label>
                            <input type="text" class="form-control" id="datasource" name="datasource" value="{{ $dataSource->data_source }}">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>     
                           
            </div>
        </div>
    </div>
</div>
@endsection