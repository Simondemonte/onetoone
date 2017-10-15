@extends('layouts.app')



@section('content')

	<ul>
		@foreach($post as $post)
		<div class="image-container">
			<img height="50" src="{{$post->path}}" />
		</div>
	<li><a href="{{route('posts.show', $post->id}}">{{$post->title}}</a></li>
		@endforeach
	</ul>
	
@endsection