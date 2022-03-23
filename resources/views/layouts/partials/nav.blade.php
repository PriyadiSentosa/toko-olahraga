<nav class="main-menu">
	<ul>
        <li class="current-list-item"><a class="nav-link" href="{{url('/')}}">Shop</a></li>
        <ul class="sub-menu">
        <li><a href="">Cart</a></li>
    </ul>
    </li>

    <li>
        <div class="header-icons">
        <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
        <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>

         <a class="current-list-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
         </div>
        </li>
    </ul>
</nav>
