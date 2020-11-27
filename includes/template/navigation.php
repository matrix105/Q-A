<nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">Survey</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
			<a class="nav-link <?php if ($CURRENT_PAGE == "Dashboard") {?>active<?php }?>" href="./dashboard/index.php">Dashboard</a>
            <div class="navbar-nav ml-auto">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Login") {?>active<?php }?>" href="./login.php">Login</a> 
            </div>
        </div>
    </nav>