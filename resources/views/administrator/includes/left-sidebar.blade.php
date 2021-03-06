<!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/images/{{Auth::User()->role}}/{{Auth::User()->avatar}}" height="160px" class="img-circle" alt="User Image">
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
          <a href="/vouchers">
            <i class="fa fa-ticket"></i> <span> Vouchers</span>
          </a>
        </li>
        <li>
          <a href="/my-students">
            <i class="fa fa-check-square-o"></i> <span> Students</span>
          </a>
        </li>
        <li>
          <a href="/messages">
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