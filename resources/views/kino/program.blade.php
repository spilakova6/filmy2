
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="img1/logo.png" alt="logo"></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="tretia.html">Program</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Top filmy
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="druha.html">TOP 5 filmov</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="nadpis text-center">Vitajte v kine</h1>
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                <div class="col-md-12">
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img1/mila.jpg" alt="obrazok2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img1/gump1.jpeg" alt="obrazok2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img1/viac.jpg" alt="obrazok1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img1/viac1.jpg" alt="obrazok">
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>
