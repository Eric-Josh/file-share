@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'fileUpload'
])

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">File Upload</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('filedump.create') }}" type="button" class="btn btn-success"><i class="fa fa-plus"></i> New File Upload</a> <br><br>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered ">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name <i class="fa fa-sort-alpha-asc"></i></th>
                            <th scope="col">Data Source <i class="fa fa-sort-alpha-asc"></i></th>
                            <th scope="col">Owner</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">File Size</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fileDump as $fileDumps)
                            <tr>
                            <th scope="col">{{ $fileDumps->id }}</th>
                            <td >{{ $fileDumps->file_name }}</td>
                            <td>{{ $fileDumps->datasource->data_source }}</td>
                            <td>{{ $fileDumps->user->name }}</td>
                            <td>{{ $fileDumps->created_at->format('j F, Y') }}</td>
                            <td>
                                @if( $fileDumps->file_size / 1000000 <= 0.9 )
                                    {{ round(($fileDumps->file_size / 1000),1) }} KB
                                @else
                                    {{ round(($fileDumps->file_size / 1000000),1)  }} MB
                                @endif
                            </td>
                            <td><a href="{{ route('filedump.edit', $fileDumps->id) }}">Edit</a></td>
                            <td>
                                <form method="POST" action="{{ route('filedump.destroy', $fileDumps->id) }}">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{ $fileDump->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
