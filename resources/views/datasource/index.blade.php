@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'datasource'
])

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Sources</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('datasource.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i> New Data Source</a> <br><br>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered ">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Data Source</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataSource as $dataSources)
                            <tr>
                            <th scope="row">{{ $dataSources->id }}</th>
                            <td>{{ $dataSources->data_source }}</td>
                            <td><a href="{{ route('datasource.edit', $dataSources->id) }}">Edit</a></td>
                            <td>
                                <form method="POST" action="{{ route('datasource.destroy', $dataSources->id) }}">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
