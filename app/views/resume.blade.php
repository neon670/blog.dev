@extends('layouts.master')

{{-- @section('content')
   this is my resume 
@stop --}}
@section('title')
    My Resume
@stop

@section('header')
 <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Noe Nevarez</h1>
                        <p class="intro-text">My resume</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
@section('resume')
<h4>NOE NEVAREZ<br>
San Antonio, TX 78230<br>closner_nevarez@hotmail.com<br> Ph: 210-831-0988</h4>
<p>OBJECTIVE: Hardworking professional with a history of exceeding expectations looking to make an impact on the front end industry and delivering quantifiable results. Adept at effective multi-tasking and achieving outstanding results in high-pressure environments.</p><br>
<p>WEB DEV PROJECTS:<br>
Cart Blanche: Lavavel based project where I designed the admin page, rendering all data from our database using controllers and routes.<br>
Black Jack: This game was designed on the command line using PHP<br>
Whack a Mole: Whack a Mole was accomplished by combinging javaScript, HTML, CSS<br>
My Blog: Another Laravel based project using mySQL, Twitter Bootstrap, Custom CSS <br>
Simple Simon Game:This was heavliy based on using jQuery and Custom CSS</p>
<h3> EXPERIENCE:</h3>
<ul>
<p>Consumer Lending Financial Specialist, Mar 2013-Feb 2015
USAA, San Antonio, TX:<p></ul>
<li>Establish and maintain relationships with individual customers, provide assistance with problems customers may encounter.</li>
<li>Confer with underwriters to resolve loan application problems.</li>
<li>Examine, evaluate, or process loan applications.</li><br>
</li>
<ul>
<p>Personal Banker, Mar 2011-Mar 2013 Wells Fargo, San Antonio, TX</p>
</ul>
<li>
Help the branch generate income by cross selling products and refer clients to different lines of business when appropriate. 
<li>Assist by generating loans approximately $250,000 a quarter.</li>
<li>Establish and maintain relationships with individual or business customers or provide assistance with problems these customers may encounter.</li>
<li>Network within communities to find and attract new business.</li>
<li>Helped customers reach short and long term financial goals</li><br>
</li>
<ul>
<p>Customer Service Teller, Apr 2007-Mar 2011 Frost Bank, San Antonio, TX</p>
</ul>
<li>Verify signatures and required information on checks. Processed customers financial transactions and kept accurate records of transactions</li>
<li>Ensure all transactions were in compliance with all regulatory guidelines</li>
￼￼￼￼￼￼￼￼￼￼￼￼￼￼￼
￼<p>EDUCATION:<br>
LAMP-J Stack, May 2015 Codeup, San Antonio, TX<br>
Bachelor of Arts, Communication
University of Texas at San Antonio, San Antonio, TX</p>
@stop
@section('about')
 <h2>My resume</h2>
@stop