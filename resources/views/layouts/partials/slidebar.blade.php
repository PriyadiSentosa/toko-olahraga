<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('bakend/img/user.png') }}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="/admin"><em class="fa fa-dashboard color-blue">&nbsp;</em><b> Dashboard</b></a></li>
        <li><a href="{{route('suplier.index')}}"><em class="fa fa-users color-blue">&nbsp;</em><b> Supplier </b></a></li>
         <li><a href="{{route('barang.index')}}"><em class="fa fa-archive color-blue">&nbsp;</em><b> Barang </b></a></li>
                  <li><a href="{{route('user.index')}}"><em class="fa fa-archive color-blue">&nbsp;</em><b> User-Management </b></a></li>
    </ul>
</div>
<!--/.sidebar-->
