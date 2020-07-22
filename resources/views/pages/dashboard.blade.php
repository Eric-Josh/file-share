@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-chart-bar-32 text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Uploaded Files</p>
                                    <p class="card-title">200
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i> Update Now
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-bullet-list-67 text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Storage Used</p>
                                    <p class="card-title">150GB
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i> Last day
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-single-02 text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Registered Users</p>
                                    <p class="card-title">23
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> In the last hour
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Followers</p>
                                    <p class="card-title">+45K
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-refresh"></i> Update now
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <h5 class="card-title"><i class="fa fa-clock" style="font-size:48px;"></i> Recent</h5>
        <div class="">
        <ul class="nav nav-tabs" role="tablist" style="border-bottom:0px;">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#grid"><i class="material-icons">view_module</i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#list"><i class="material-icons">list</i></a>
            </li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="grid" class="tab-pane active"><br>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Followers</p>
                                            <p class="card-title">+45K
                                                <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    Paydirect
                                    <a href="#" class="pull-right" data-toggle="popover" title="File Properties" >
                                        <i class="fa fa-ellipsis-v pull-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="list" class="tab-pane"><br>
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
                        <!-- <th scope="col">Edit</th>
                        <th scope="col">Delete</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        <!-- loaded popover content -->
        <div id="popover-content" style="display: none; padding: 30px;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa fa-user"></i> Owner: Rotimi Salami</li>
                <li class="list-group-item"><i class="fa fa-calendar"></i> Date Created: 4th Sept 2020</li>
                <li class="list-group-item"><i class="nc-icon nc-box-2"></i> File Size: 1GB</li>
                <li class="list-group-item"><i class="fa fa-edit"></i> Rename </li>
                <li class="list-group-item"><i class="fa fa-share-alt"></i>  Share Link</li>
                <li class="list-group-item"><i class="fa fa-cloud-download"></i>  Download File</li>
                <li class="list-group-item"><i class="fa fa-trash"></i>  Remove </li>
            </ul>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                return $('#popover-content').html();
                }
            });           
        });
    </script>
@endpush