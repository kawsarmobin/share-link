@extends('layouts.admin')
@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li class="active"><a href="#">Home</a></li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                {{-- <div class="col-md-8">
                                    <h2 style="margin: 0px">All Links</h2>
                                </div> --}}
                                <div class="col-md-12">
                                    <a class="btn btn-success btn-block" href="{!! route('storedurl.create') !!}"><span class="fa fa-plus"></span> Add new link</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <!-- TAGS LIST -->
            <div class="col-md-12">
                <div class="panel panel-default push-up-20">
                    <div class="panel-heading">
                        <h3 class="panel-title">Category List</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-tags">
                            @if ($categories)
                                @foreach ($categories as $category)
                                    <li><a href="{!! route('category.single', $category->id) !!}"><span class="fa fa-tag"></span> {{ $category->name }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END TAGS LIST -->
        </div>

        <div class="row">
            <div class="col-md-12">

                <!-- PROFILE WIDGET -->
                {{-- <div class="col-md-4">

                    <div class="panel panel-default">
                        <div class="panel-body profile bg-info">

                            <div class="profile-data" style="padding: inherit;">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">UI/UX Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a style="top: 22px" href="#" class="profile-control-left"><span class="fa fa-twitter"></span></a>
                                <a style="top: 22px" href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="widget widget-success widget-no-subtitle">
                        <div class="widget-big-int">$ <span class="num-count">4,381</span></div>
                        <div class="widget-subtitle">Latest transaction</div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-left"><span class="fa fa-cloud"></span></a>
                            <a href="#" class="widget-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>

                </div> --}}
                <!-- END PROFILE WIDGET -->



                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">List of Links</h3>
                        <ul class="panel-controls">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @if ($storedUrls)
                                    @foreach ($storedUrls as $storedUrl)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <a href="{!! route('category.single', $storedUrl->category->id) !!}" class="btn btn-info btn-rounded btn-sm">{{ $storedUrl->category->name }}</a>
                                            </td>
                                            <td>{{ $storedUrl->title }}</td>
                                            <td>
                                                <a href="{{ $storedUrl->url }}" target="_blank" class="btn btn-info btn-rounded btn-sm">Click</a>
                                            </td>
                                            <td>
                                                <a href="{!! route('storedurl.edit', $storedUrl->id) !!}" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
                                                <a href="{!! route('storedurl.destroy', $storedUrl->id) !!}" class="btn btn-danger btn-rounded btn-sm" onClick="return confirm('Are you sure?')"><span class="fa fa-times"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END DEFAULT DATATABLE -->
            </div>
        </div>



    </div>
    <!-- END PAGE CONTENT WRAPPER -->

@endsection
