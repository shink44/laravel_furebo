<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-info bg-gradient furebo-header-container">
   <div class="container">
     <a class="navbar-brand" href="{{ url('/recruitment') }}">
       {{ config('app.name', 'Laravel') }}
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
       <span class="navbar-toggler-icon"></span>
     </button>
 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ms-auto mr-5 mt-2">
         <!-- Authentication Links -->
         @guest
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         </li>
         <hr>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
         </li>

         @else
         <li class="nav-item mr-5">
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             ログアウト
           </a>
 
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
           </form>
         </li>
         @endguest
       </ul>
     </div>
   </div>
 </nav>