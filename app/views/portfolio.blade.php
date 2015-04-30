@extends('layouts.master')

@section('title')
    My Portfolio
@stop

@section('content')
  This is a summary of some of my work I have completed while attending Code Up
@stop

@section('header')
 <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Noe Nevarez</h1>
                        <p class="intro-text">My portfolio</p>
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
 <h2>About Noe Nevarez</h2>
@stop