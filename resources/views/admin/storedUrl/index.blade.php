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
            <div class="col-md-12">

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
                                            <td>{{ $storedUrl->category->name }}</td>
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
