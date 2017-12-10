@extends('layouts.master')

@section('content')

<h1>BLog Create</h1>
<hr>
<!-- 
@if($errors->any())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<p>{{ $error}}</p>
@endforeach
</div>
@endif -->

@if(Session::has('success_blog'))
<div class="alert alert-success">
	{{ Session::get('success_blog')}}
</div>
@endif

<form action="{{ route('blog.store')}}" method="post">
	{{ csrf_field ()}}
	<div class="form-group">
		<label for="title" class="control-label">Title</label>
		<input type="text" name="title" class="form-control" >

	</div>

	<div class="form-group">
		<label for="description" class="control-label">Description</label>
		<textarea name="description" class="form-control" id="summernote"></textarea> 
	</div>

	<button class="btn btn-primary" type="submit" >Create New Blog</button>
</form>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.ujs"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<script>

$('document').ready(function(){

$('#summernote').summernote();
});

@stop