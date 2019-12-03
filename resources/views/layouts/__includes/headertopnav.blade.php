<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">

        <div class="navbar-header">
            
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="/estaciones">Estaciones</a></li>
                <li style="display:none"><a href="/claro">Reportes</a></li>
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/claro">Proyectos</a></li>
                        <li><a href="/publicado">Publicados</a></li>
                        <li><a href="/cancelado">Cancelados</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group" style="display:none">
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                </div>
            </form>
        </div>

        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/admin/img/business-person-icon.png" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/admin/img/business-person-icon.png" class="img-circle" alt="User Image">
                            <p style="color: black;">
                                
                                <small></small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
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
            </ul>
        </div>
        <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
    </nav>
</header>
