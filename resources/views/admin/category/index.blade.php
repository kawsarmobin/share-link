@extends('layouts.admin')
@section('content')

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Category</li>
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
                                <div class="col-md-8">
                                    <h2 style="margin: 0px">Categories <small>{{ $categories->count() }}</small></h2>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-success btn-block" href="{!! route('category.create') !!}"><span class="fa fa-plus"></span> Add new category</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            @if ($categories)
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-data" style="padding: inherit;">
                                    <div class="profile-data-name">{{ $category->name }}</div>
                                    <div class="profile-data-title">{{ $category->created_at->toFormattedDateString() }}</div>
                                </div>
                                <div class="profile-controls">
                                    <a style="top: 22px" href="{!! route('category.edit', $category->id) !!}" class="profile-control-right"><span class="fa fa-edit"></span></a>
                                    <a style="top: 22px" href="{!! route('category.destroy', $category->id) !!}" onclick="return confirm('Are you sure?')" class="profile-control-left"><span class="fa fa-trash-o"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    <!-- END PAGE CONTENT WRAPPER -->

@endsection
