@extends('layouts.master')

 

    @section('title')
    My Home Page
    @stop



   @section('header')
     <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">Noe Nevarez</h1>
                            <p class="intro-text">A brief look at what I have accomplished while attedning Code Up</p>
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
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Noe Nevarez</h2>
                <p>I had been in the banking industry for the past 8 yrs, working with loans, credit, checking/savings, customer service.</p>
                <p>I was looking for a way to change my career path and was very interested in learning programing. Then I heard about Code Up and decided to take a leap of faith and quit my job and fully immerse myself in the programming world.</p>
                <p>The bootcamp consisted of HTML, CSS, JavaScript, JQuery, MySql, PHP, Laravel.</p>
            </div>
        </div>
    @stop

  

  
  

  

{{-- </body> --}}


