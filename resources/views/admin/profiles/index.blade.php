@extends('layouts.admin')
@section('content')

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info push-up-20">
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <a class="btn btn-info btn-block" href="{!! route('profiles.create') !!}"><span class="fa fa-plus"></span> Create your profile</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @if ($profiles)
                @foreach ($profiles as $profile)
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="{{ $profile->image }}" alt="Samuel Leroy Jackson"/>
                                </div>
                                <div class="profile-data">
                                    {{-- <div class="profile-data-name">Alex Sonar</div> --}}
                                    <div class="profile-data-title">{{ $profile->status }}</div>
                                </div>
                                <div class="profile-controls">
                                    <a style="top: 22px" href="{!! route('profiles.create') !!}" class="profile-control-right"><span class="fa fa-edit"></span></a>
                                    {{-- <a style="top: 22px" href="#" onclick="return confirm('Are you sure?')" class="profile-control-left"><span class="fa fa-trash-o"></span></a> --}}
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
