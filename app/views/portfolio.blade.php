@extends('layouts.master')

@section('title')
    My Portfolio
@stop

@section('content')
  
@stop

@section('header')
 <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Noe Nevarez</h1>
                        <p class="intro-text"><a href="#">My Portfolio</a> </p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>
@stop

@section('about')
 <h2>My work</h2> 
        <div class="row">
            <div class="column"><a href="http://conceptsconstruction.com" target="blank"><img src="" height="42" width="42">Concept Construction</a></div>
            <div class="column"><a href="http://www.sunsafefilm.com/" target="blank">Sunsafe Film</a></div>
        </div><!-- /.row -->
        <div class="row">
            <div class="column"><a href="http://westsidedoginitiative.org/index.html" target="blank"><img src="img/mole_cartoon.png" height="42" width="42">Westside Dog Initative<a/></div>
            <div class="column"><a href="http://cartblanche.website/" target="blank">CartBlanche<a/></div>
            <div class="column"></div>
        </div><!-- /.row -->
@stop