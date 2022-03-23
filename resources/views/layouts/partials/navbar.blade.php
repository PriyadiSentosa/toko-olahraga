<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="">
                <b><span>
                        Penjualan </span>Alat Olahraga</b></a>
            <ul class="nav navbar-top-links navbar-right">
            <li class=""><a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    <span><b> Logout </b></span><em class="fa fa-sign-out color-red">&nbsp;</em>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
