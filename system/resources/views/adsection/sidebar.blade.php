<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('beranda')}}" class="site_title"><i class="fa fa-paw"></i> <span>Waroeng Distroe</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{url('public')}}/production/images/khadafi.jpeg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                  @if(Auth::check())
                    {{request()->user()->username}}
                  @else
                    Silahkan login
                  @endif
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="{{url('beranda')}}"><i class="fa fa-home"></i>Beranda</a></li>
                <li><a href="{{url('admin/kategori')}}"><i class="fa fa-pencil"></i>Kategori</a></li>
                <li><a href="{{url('admin/produk')}}"><i class="fa fa-heart"></i>Produk</a></li>
                <li><a href="{{url('admin/user')}}"><i class="fa fa-user"></i>Pengguna</a></li>
                </ul>
              </div>
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('profile')}}">Profile</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- sidebar menu -->