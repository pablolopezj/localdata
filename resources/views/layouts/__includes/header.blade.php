
<style>
.skin-blue .main-header .logo {
    background-color: #FFF;
    color: #fff;
    border-bottom: 0 solid transparent;
}
.skin-blue .main-header .navbar {
    background-color: #FFF;
}
.skin-blue .main-header .navbar .nav>li>a {
    color: #020202;
}
.skin-blue .main-header .navbar .sidebar-toggle {
    color: #000;
}
</style>
<header class="main-header" style="">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <div> NetSuite </div>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">{{ __('Toggle navigation') }}</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/admin/img/business-person-icon.png" class="user-image" alt="User Image">
            <span class="hidden-xs"></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="/admin/img/business-person-icon.png" class="img-circle" alt="User Image">

              <p>
               
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat"></a>
              </div>
              <div class="pull-right">
                <a href="" class="btn btn-default btn-flat"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"></a>
                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <!--
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
    -->
      </ul>
    </div>
  </nav>
</header>
