@extends('layouts.master')

@section('content')

<h1>Blog List</h1>
<hr>

@foreach($blogs as $blog)
	<h1>{{ $blog->title }}</h1>
	<p>
		{{ str_limit($blog->description, 20) }}}
	</p>
	<a href="/blog/{{ $blog->id }}"><p>Read More</p></a>
@endforeach

@stop