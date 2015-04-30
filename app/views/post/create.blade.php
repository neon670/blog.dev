@extends('layouts.master')

{{-- @section('title') --}}

{{-- @stop --}}

@section('content')
	{{-- <form method= "POST" action="{{{ action('PostsController@store') }}}">
		<label for="title">Blog title</label>
		<input type="text" name="title">
		<button type="submit" value="btn btn-default">Submit</button>
	</form> --}}
		<h1>Create a Post</h1>
			@if($errors->all())
				@foreach($errors->all() as $error)
					{{ $error }}
				@endforeach
			@endif
		{{-- {{ $errors->first('title', '<span class="help-block">:message</span>') }} --}}
		<section class="container-fluid" id="section2">

	  	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <!-- <div class="well well-sm"> -->
	            {{ Form::open($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	                <form class="form-horizontal" method="post" action="{{{ action('PostsController@store') }}}">
	                    <fieldset>

	                        <div class="form-group">
	                            <div class="col-md-8">
	                                <input id="title" name="title" type="text" value="{{{ Input::old('title') }}}" placeholder="Title" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                        	<div class="col-md-8">	
	                                <input id="body" name="body" type="text" value="{{{ Input::old('body') }}}" placeholder="Enter content" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <button type="submit" name="submit_signup"class="btn btn-primary btn-lg">Submit</button>
	                            </div>
	                        </div>
	                    </fieldset>
	                </form>
	                {{ Form::token() }}
	                {{ Form::close() }}
	            <!-- </div> -->
	        </div>
	    </div>
	</div>


  
</section>
@stop