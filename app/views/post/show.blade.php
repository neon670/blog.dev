@extends('layouts.master')

@section('content')
	<h3>{{$post['title']}}</h3>
<p>{{$post['body']}}</p>
<p>Created at: {{{ $post->created_at }}}</p>
<p>Last Updated at: {{{ $post->updated_at }}}</p>
<p>Written by: {{{ $post->user->username }}}</p>
<{{{ $post->body }}}</p>
<h4><a href="{{{ action('PostsController@index') }}}">Back to Blog Page</h4>
@stop