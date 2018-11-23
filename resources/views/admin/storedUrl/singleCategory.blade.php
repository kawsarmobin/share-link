@extends('layouts.admin')
@section('content')

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <!-- PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info push-up-20">
                    <div class="panel-heading" style="padding-bottom: 0">
                        <div class="form-group">
                            <div class="col-md-8">
                                <h2><span class="fa fa-arrow-circle-o-left"></span> {{ $category->name }} <span class="label label-default">{{ $singleCategory->count() }}</span></h2>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-info btn-block" href="{!! route('storedurl.create') !!}"><span class="fa fa-plus"></span> Add new link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE TITLE -->

        @if ($singleCategory->count() > 0)
            <div class="row">
                @if ($singleCategory)
                    @foreach ($singleCategory as $singleCat)
                        <div class="col-md-12">

                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int" style="font-size: 20px">{{ $singleCat->title }}</div>
                                <div class="widget-subtitle">{{ $singleCat->url }}</div>
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-copy"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-hand-pointer"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ $singleCat->url }}" target="_blank"><span class="fa fa-plus"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>
        @else
            <div class="text-center">
                <h1 style="font-family: Comic">
                    <b>No link yet...</b>
                </h1>
            </div>
        @endif


        <div class="row">
            <!-- TAGS LIST -->
            <div class="col-md-12">
                <div class="panel panel-info push-up-20">
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


    </div>
    <!-- PAGE CONTENT WRAPPER -->

@endsection
