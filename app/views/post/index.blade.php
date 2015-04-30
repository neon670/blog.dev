@extends('layouts.master')

@section('content')

	<h1>List of Blogs</h1>
 <ul>
        @foreach($posts as $post)
        <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{$post['title']}}</h3>
           <p>{{$post['body']}}</p>
        @endforeach
 </ul>
 	{{ $posts->links() }}
 {{-- <p><h2><a href="{{{ http://blog.dev/post/create}}}">Create new blog</h2></p> --}}
@stop
