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
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li>
          <a href="/profile">
            <i class="fa fa-user"></i> <span> Profile</span>
          </a>
        </li>
        <li>
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span> Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/view-students">
            <i class="fa fa-check-square-o"></i> <span> Students</span>
          </a>
        </li>
        <li>
          <a href="/my-inbox">
            <i class="fa fa-envelope"></i> <span> Messages</span>
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