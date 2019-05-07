 <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav" >
  <div class="container">
    <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a> -->

    <a class="navbar-brand  js-scroll-trigger" href="index.php">
        <img src="./img/icon/white-home.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Home
    </a>     

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i> Profile
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editstudentModal"><i class="fas fa-cog"></i> Edit Profile</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>