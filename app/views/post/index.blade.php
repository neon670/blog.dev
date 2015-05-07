@extends('layouts.master')

@section('content')

	<h1>List of Blogs</h1>
 <ul>
        @foreach($posts as $post)
        <h3><a href="{{{ action('PostsController@show', $post->slug) }}}">{{$post['title']}}</h3>
           {{-- <p>{{$post->createdAt)}}</p> --}}
        @endforeach
        
 </ul>
 	<div id = "page" > {{ $posts->links() }}
 	</div>
 <h4><a href="{{{'post/create'}}}">Create new blog</h4>
@stop
