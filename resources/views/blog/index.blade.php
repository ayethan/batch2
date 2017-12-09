@extends('layouts.master')

@section('content')

<h1>Blog List -<a href="/blog/create">Create Blog</h1>
<hr>

@if(Session::has('blog_deleted'))
<div class="alert alert-success">
	{{ Session::get('blog_deleted') }}
</div>
@endif

@foreach($blogs as $blog)
<a href="/blog/{{ $blog->id }}">
	<h1>{{ $blog->title }}</h1>
	<p>
		{{ str_limit($blog->description, 20) }}}
	</p>
	<a href="/blog/{{ $blog->id }}/edit">Edit</a>

	<form action="{{ route('blog.destroy',['id' =>$blog->id]) }}" method="post" accept-charset="utf-8">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="delete">
		<button type="submit">Delete this post.</button>
	</form>
@endforeach

@stop