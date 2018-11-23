@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="error-container">
                <div class="error-code" style="font-size: 50px">Hello Mr. {{ Auth::user()->name }}</div>
                <div class="error-text">Welcome to our site. <br><br> Store your <strong>important</strong> url/link.</div>
            </div>

        </div>
    </div>
@endsection
