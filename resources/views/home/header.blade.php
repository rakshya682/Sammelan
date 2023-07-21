
<header class="header_section" style="height:70px;padding-top:7px;">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a style="margin-left:-70px;"class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/logo1.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="" id="navbarSupportedContent" style="margin-left:200px">
                     <ul class="navbar-nav"style="margin-left:190px;">
                        <li class="nav-item ">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('events')}}">Event</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_tickets')}}"><p>My Tickets</p></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                        
                        @if (Route::has('login'))

                        @auth
                        <li class="nav-item">
                        <x-app-layout>
    
                         </x-app-layout>
                        </li>
                        @else
                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                         @endauth
                        @endif
                       
                     </ul>
                  </div>
               </nav>
            </div>
         </header>