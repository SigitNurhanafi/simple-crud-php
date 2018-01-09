<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="../admin/#">Dashboard Admin</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Top Navigation: Left Menu -->
    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="/kp-pertanian"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <!-- Top Navigation: Right Menu -->
    <ul class="nav navbar-right navbar-top-links">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="../admin/#">
                <i class="fa fa-user fa-fw"></i> <?=$_SESSION['data_admin']['nama_admin']?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="../admin/#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="../admin/#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">

                <h2 style="margin-left:20px;">Selamat datang </h2>
                <li>
                    <a href="../admin/#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="../admin/#" class="active"><i class="fa fa-dashboard fa-fw"></i> Artikel</a>
                </li>
                <li>
                    <a href="../admin/#" class="active"><i class="fa fa-dashboard fa-fw"></i> Berita</a>
                </li>
                <li>
                    <a href="../admin/#" class="active"><i class="fa fa-dashboard fa-fw"></i> Agenda</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
