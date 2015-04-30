<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <title></title>
</head>
@include('partials.navbar')
<body>
    <!-- Intro Header -->
      {{-- @yield('header') --}}
   @yield('header')

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
               @yield('about')
               @yield('body')
               @yield('content')
            </div>
        </div>
    </section>

  
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me</h2>
                <p>Feel free to email me to provide some feedback or to just say hello!</p>
                <p><a href="mailto:closner_nevarez@hotmail.com">closner_nevarez@hotmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://github.com/neon670" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/hp/?dnr=sqmpMEgSFD_VBZ-VMZtpnEoYFDouzdZxMUc" class="btn btn-default btn-lg"><i class="fa fa-linkedin"></i> <span class="network-name">LinkedIn</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

  @include('partials.footer')
   
    {{-- @yield('bottom-script') --}}
</body> --}}

</html>
