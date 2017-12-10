@extends('layouts.master')
@section('content')
<h1>Welcome form my Blog </h1>
<p class="lead">Hi, Welcome from my blog. I am writing what I want to write here. Read or leave.</p>
<hr>
@foreach ($blogs as $blog)
     <a href="/blog/{{ $blog->id}}">
        <h1>{{ $blog->title }}</h1>
        </a>
        <p>
        	 {{ str_limit($blog->description, 20) }}

        </p>
@endforeach
{{ $blogs->links() }}

@stop 
