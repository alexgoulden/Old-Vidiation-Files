<!-- Sidebar Elements -->
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="/../vidiation/index_files/navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" href="/../vidiation/index_files/bootstrap-core.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/../vidiation/header-footer/head-foot.css">
    <script src="/../vidiation/header-footer/head-foot.js"></script>

</head>

<div class="wrapper">
        <nav id="sidebar" class="sidebar-main absolute-center">
            <ul id="sidemenu" class="list-unstyled components">
                <li>
                    <a href="#create-submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Create</a>
                    <ul class="collapse list-unstyled" id="create-submenu">
                        <li>
                            <a href="#">My Station</a>
                        </li>
                        <li>
                            <a href="#">Upload</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#stations-submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Stations</a>
                    <ul class="collapse list-unstyled" id="stations-submenu">
                        <li>
                            <a href="#">Dingo</a>
                        </li>
                        <li>
                            <a href="#">Stingo</a>
                        </li>
                        <li>
                            <a href="#">Pingo</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Sensations</a>
                </li>
                <li>
                    <a href="#">Innovations</a>
                </li>
                <li>
                    <a href="#">Settings</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="article">About</a>
                </li>
                <li>
                    <a href="#" class="article">Help</a>
                </li>
				<li>
					<a href="#" class="article">Contact</a>
				</li>
            </ul>
        </nav>
</div>
<!-- End of Sidebar -->

<!-- Page content -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="row">

<!-- Hamburger Menu -->
        <a  class="McButton" data="hamburger-menu" onClick="sidebarCollapse()" id="sidebarCollapse">
           <b></b>
           <b></b>
           <b></b>
        </a>
<!-- end of hamburger -->
		  
		<a class="navbar-brand" href="index.php"><img src="/../vidiation/images/Vidiation-Logo-Header/1x/Artboard 1.png" class="img-responsive"></a>
	  </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Vidiation<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">WIP</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  <a class="nav-text nav-item nav-link" href="loginsystem/index.php">Login or Signup!</a>
        </form>
      </div>
    </nav>
    <!-- cannot put bootstrap core css on this until you figure out how to let it work on all pages, keep on seperate php until then -->