@extends('layouts.master')

{{-- @section('title') --}}

{{-- @stop --}}

@section('content')
	{{-- <form method= "POST" action="{{{ action('PostsController@store') }}}">
		<label for="title">Blog title</label>
		<input type="text" name="title">
		<button type="submit" value="btn btn-default">Submit</button>
	</form> --}}
		<section class="container-fluid" id="section2">
	  
	    <div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <!-- <div class="well well-sm"> -->
	                <form class="form-horizontal" method="post" action="{{{ action('PostsController@store') }}}">
	                    <fieldset>

	                        <div class="form-group">
	                            <span class="text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="fname" name="first_name" type="text" value="{{{ Input::old('fname') }}}"placeholder="First Name" class="form-control">

	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <span class="text-center"><i class="fa fa-user bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class=" text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="text-center"><i class="fa fa-users bigicon"></i></span>
	                            <div class="col-md-8">
	                                <input id="title" name="title" type="text" placeholder="Title" class="form-control">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <span class="text-center"><i class="fa fa-unlock-alt bigicon"></i></span>
	                            <div class="col-md-8">
									<p>Password must contain at least six or more characters, one number and one uppercase character.</p>

	                                <input id="pass" name="password" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}" placeholder="Type Password" class="form-control" onchange="form.passwordCheck.pattern = this.value;" required="required">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-12 text-center">
	                                <button type="submit" name="submit_signup"class="btn btn-primary btn-lg">Submit</button>
	                            </div>
	                        </div>
	                    </fieldset>
	                </form>
	            <!-- </div> -->
	        </div>
	    </div>
	</div>


  
</section>
@stop