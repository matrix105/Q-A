<nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="index.php" class="navbar-brand">Survey</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Survey") {?>active<?php }?>" href="./survey.php">Survey</a>
           
            <a class="nav-link <?php if ($CURRENT_PAGE == "Analytics") {?>active<?php }?>" href="./analytics.php">Analytics</a>
           
            <div class="navbar-nav ml-auto">
                <?php if(!isset($_SESSION['user'])){ ?>
            <a class="nav-link <?php if ($CURRENT_PAGE == "Login") {?>active<?php }?>" href="./login.php">Login</a> 
                <?php }else{ ?>
                    <a class="nav-link <?php if ($CURRENT_PAGE == "Logout") {?>active<?php }?>" href="./logout.php">Logout</a> 
                    <?php } ?>
            </div>
        </div>
    </nav>  