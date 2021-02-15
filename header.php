

<header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
			<!-- 	  		<div class="col-12 top-head-right">
				  			<ul>
				  				<?php if(empty($_SESSION['status']) == 'login') : ?>
				  				<li><a href="login.php">Login</a></li>
				  			<?php endif?>
				  				<?php if(empty($_SESSION['status']) != 'login') : ?>
								<li><a href="logout.php">Logout</a></li>
							<?php endif;?>
							
				  			</ul>				  		  		
				  		</div> -->			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title=""></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="gallery.php">Gallery</a></li>
				          <li><a href="artikel.php">Article</a></li>
				          <li class="menu-has-children"><a href="#">Shop</a>
				            <ul>
				            	<?php if(empty($_SESSION['status']) != 'login') : ?>
				              <li><a href="ticket.php">Ticket</a></li>
				          <?php endif;?>
				              <li><a href="souvenir.php">Souvenir</a></li>
				             </ul>
				          </li>
				          <li><a href="contact.php">Contact</a></li>
				      </nav>		    		
			    	</div>
			    </div>
			  </header>