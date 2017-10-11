@extends('layouts.app')



@section('content')

	<ul>
		@foreach($post as $post)
			<li>{{$post->title}}</li>
		@endforeach
	</ul>
	
@endsection