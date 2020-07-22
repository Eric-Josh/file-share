@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'fileUpload'
])
@section('head')

@endsection

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Data Source </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form method="POST" action="{{ route('filedump.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Attach file</label>
                            <input type="file" class="form-control-file border" name="file">
                        </div>
                        <div class="form-group">
                            <label for="lang">Data Source</label>
                            <select class="custom-select" name="datasource">
                                <option selected>Select Data Source</option>
                                @foreach ($datasource as $datasources)
                                <option value="{{ $datasources->id }}">{{ $datasources->data_source }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection