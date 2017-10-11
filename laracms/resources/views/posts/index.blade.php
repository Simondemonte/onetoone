@extends('layouts.app')



@section('content')

	<ul>
		@foreach($post as $post)
			<li><a href="{{route('posts.show', $post->id}}">{{$post->title}}</a></li>
		@endforeach
	</ul>
	
@endsection