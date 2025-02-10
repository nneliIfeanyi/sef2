<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename fst-italic d-lg-none" style="font-size: small;"><?php echo SITENAME; ?></h1>
      <h1 class="sitename fst-italic d-none d-lg-block fs-6"><?php echo SITENAME; ?></h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?php echo URLROOT; ?>/pages">Home<br></a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/events">Events</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/volunteer">Volunteer</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/blog">Blog</a></li>
        <!-- <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> -->
        <li><a href="<?php echo URLROOT; ?>/pages/donate">Donate</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>