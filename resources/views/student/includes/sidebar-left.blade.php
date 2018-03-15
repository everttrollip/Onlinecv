<!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            @if(Auth::user()->avatar)
                <img src="/storage/images/{{Auth::User()->role}}/{{Auth::User()->avatar}}" height="160px" class="img-circle" alt="User Image">
            @else
                <img src="http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg" height="160px" class="img-circle" alt="User Image">
            @endif
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
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
         <li>
          <a href="/student/dashboard">
            <i class="fa fa-dashboard"></i> <span> Dashboard</span>
          </a>
        </li>
         <li>
          <a href="/student/cv">
            <i class="fa fa-file-o"></i> <span> Visual CV</span>
          </a>
        </li>
        <li>
          <a href="/student/credits">
            <i class="fa fa-ticket"></i> <span> Credits</span>
          </a>
        </li>
        <li>
          <a href="/my-inbox">
            <i class="fa fa-envelope"></i> <span> Messages</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
            <span> Documents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../student/uploads"><i class=""></i> My Uploads</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrows-h"></i>
            <span> Links</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class=""></i> Suggested</a></li>
            <li><a href="../UI/icons.html"><i class=""></i> Invites</a></li>
            <li><a href="../UI/buttons.html"><i class=""></i> Follow</a></li>
          </ul>
        </li>
        <li>
          <a href="/student/my-administrator">
            <i class="fa fa-user"></i> <span> My Administrator</span>
          </a>
        </li>
        <li>
          <a href="/contact">
            <i class="fa fa-phone-square"></i> <span> Contact Us</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->