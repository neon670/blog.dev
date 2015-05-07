@extends('layouts.master')

 @section('content')
{{ Form::open(array('action' => 'LoginController@login')) }}

	                    <fieldset>

	                        <div class="form-group">
	                            <div class="col-md-8 text-center">
	                                {{ Form::email('email', Input::old('email'),array('placeholder'=>'Email', 'class'=>'form-control')) }}
	                            </div>
	                        </div>

	                        <div class="form-group">
	                        	<div class="col-md-8 text-center">	
	                                {{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control')) }}
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-10 text-left">
	                                <button type="submit" name="submit_signup"class="btn btn-primary btn-lg">Submit</button>
	                            </div>	
	                        </div>
	                    </fieldset>

	{{ Form::close() }}           
@stop

