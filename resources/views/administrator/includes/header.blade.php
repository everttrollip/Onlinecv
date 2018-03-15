<header class="main-header">
    <!-- Logo -->
    <a href="/images/logo.png" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/images/logo-collapsed.png" height="30px;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="/images/logo-white.png" height="50px;"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

          <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <!-- Messages -->
         <admin-messages-header></admin-messages-header>
          <!-- Notifications: style can be found in dropdown.less -->
            <admin-notifications-header></admin-notifications-header>
          <!-- Tasks: style can be found in dropdown.less -->
            <admin-tasks-header></admin-tasks-header>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @if(Auth::user()->avatar)
                    <img src="/storage/images/{{Auth::User()->role}}/{{Auth::User()->avatar}}" class="user-image" alt="User Image">
                @else
                    <img src="http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg" class="user-image" alt="User Image">
                @endif
              <span class="hidden-xs">{{Auth::User()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

                  @if(Auth::user()->avatar)
                    <img src="/storage/images/{{Auth::User()->role}}/{{Auth::User()->avatar}}" class="img-circle" alt="User Image">
                @else
                    <img src="http://www.microhub.co.za/wp-content/uploads/2018/02/no-image.jpeg"class="img-circle" alt="User Image">
                @endif

                <p>
                 {{Auth::User()->name}}
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="/dashboard">Dashboard</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="/students">Students</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="/vouchers">Vouchers</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
