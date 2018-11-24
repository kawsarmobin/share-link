@extends('layouts.admin')
@section('content')

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <form class="form-horizontal" action="{!! route('storedurl.update', $storedUrl->id) !!}" method="post">
                    @csrf @method('put')

                    @include('includes.errors')

                    <div class="panel panel-default push-up-20">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Edit Link</strong></h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Category</label>
                                <div class="col-md-6">
                                    <select class="form-control select" name="category_id">
                                        <option value="">Select Category</option>
                                        @if ($categories)
                                          @foreach ($categories as $category)
                                            <option {{ $storedUrl->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                          @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Title</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="title" class="form-control" value="{{ $storedUrl->title }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">URL</label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-anchor"></span></span>
                                        <input type="url" name="url" class="form-control" value="{{ $storedUrl->url }}"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Update Link</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <!-- END PAGE CONTENT WRAPPER -->

@endsection
