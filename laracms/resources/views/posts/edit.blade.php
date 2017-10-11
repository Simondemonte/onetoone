@extends('layout.app')



@section('content')

	<h1>Edit Post</h1>
	
	<!--form action="/posts/{{$post->id}}"method="post">
		<input type="hidden" name="_method" value="PUT" />
		<input type="text" name="title" value="{{$post->title}}"/>
		{{csrf_field()}}
		<input type="submit" name="submit" />
	</form>-->
		
		{!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
		
		{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
			
			{!! Form::submit('Update Post', ['class'=>btn btn-info']) !!}
		
		{!! Form:close()!!}
	<form action="/post/{{$post->id}}"method="post">
		<input type="hidden" name="_method" value="DELETE" />
		{{csrf_field()}}
		<input type="submit" value="DELETE"/>
	</form>
@stop


@section('footer')



@stop
		