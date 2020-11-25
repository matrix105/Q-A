<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Dashboard") {?>active<?php }?>" href="/includes/dashboard/index.php">Dashboard</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Login") {?>active<?php }?>" href="includes/login.php">Login</a>
	  </li>
	</ul>
</div>