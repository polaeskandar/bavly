<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$activeHome = $url == 'http://localhost/index.php';
$activeContent = $url == 'http://localhost/content.php';
$activeSearch = $url == 'http://localhost/search.php';
?>
<!---->
<!--<nav class="navbar navbar-expand-lg bg-dark">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand d-flex align-items-center" href="index.php"><i class="fa-solid fa-cross ms-2"></i>بافلي</a>-->
<!--        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">-->
<!--            <i class="fa-solid fa-bars"></i>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="mobileMenu">-->
<!--            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link --><?php //echo $activeHome ? 'nav-active-link' : '' ?><!--" href="index.php">الصفحه الرئيسيه</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link --><?php //echo $activeContent ? 'nav-active-link' : '' ?><!--" href="content.php">الاباء البطاركه</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link --><?php //echo $activeSearch ? 'nav-active-link' : '' ?><!--" href="search.php">ابحث عن الاباء البطاركه</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="user/index.php"><i class="fa-solid fa-user"></i> تسجيل الدخول</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <form class="" role="search">-->
<!--                <input class="me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button type="submit">Search</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Offcanvas navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>