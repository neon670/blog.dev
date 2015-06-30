<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{ action('HomeController@showWelcome') }}}">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{{ action('HomeController@showResume') }}}">Resume</a>
                    </li>
                    <li>
                    <a class="page-scroll" href="{{{ action('HomeController@showPortfolio') 	}}}">Portfolio</a>
                	</li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                   {{--   <li>
                        <a class="page-scroll" href="{{{ action('PostsController@index')     }}}">Blog Post</a>
                    </li> --}}
                  {{--   @if(Auth::check())
                    <li>Hello, {{{ Auth::user()->username }}}</li>
                    <li>
                         <a class="page-scroll" href="{{{ action('LoginController@logout')    }}}">Logout</a>
                    </li>
                    @else
                    <li>
                        <a class="page-scroll" href="{{{ action('LoginController@login')    }}}">Login</a>
                    </li>
                    @endif --}}
                </ul>
            </div>
                <form id="searchThis" action="/search" style="display: inline;" method="get"><input type="text" id="searchBox" /> <input id="searchButton" value="Go" type="submit" /></form>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>