@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <h1>This is project Page</h1>

                <h2 class="text-info">Blog from database</h2>
             <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-md-3 bg-info">
                    <h1>{{ $blog->blog_name }}</h1>
                    <h2>{{ $blog->blog }}</h2>
                </div>
            @endforeach
             </div>
            </div>
        </div>
    </div>
@endsection