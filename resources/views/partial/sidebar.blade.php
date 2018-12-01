<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Apotek Prima</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
   <!--   <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN ACTIVITY</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li class="active"><a href="{{route('kategori.index')}}"><i class="fa fa-newspaper-o nav-icon"></i>Kategori</a></li>
          </ul>
          <ul class="treeview-menu">
                <li class="active"><a href="{{route('obat.index')}}"><i class=" fa fa-mobile-phone"></i>Obat</a></li>
          </ul>

              <ul class="treeview-menu">
                <li class="active"><a href="{{route('galeri.index')}}"><i class=" fa fa-picture-o"></i>Galeri</a></li>
          </ul>
          <ul class="treeview-menu">
                <li class="active"><a href="{{route('testimoni.index')}}"><i class="fa fa-newspaper-o nav-icon"></i>Testimoni</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
