<header id="divLogoPromo">
					<div id="containerDivLogoPromo">
						<figure>
								<img alt="fcarrizalest.com" src="http://fcarrizalest.com/sites/fcarrizalest.com/files/logop.png" />
						</figure>

						<nav>
						<ul>
									<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')))); ?>

						</ul>
						</nav>

						<div id="Site">
								<div id="site-name">
                  				<a href="/" title="Home" rel="home">Awen</a>
              					  </div>
								<div id="site-slogan">Todo es programable</div>
						</div>

						

					</div>
			</header>	

			

			<div id="container"> 

					<aside id="sidebarleft">
								<?php print render($page['left']); ?>
					</aside>

					<aside id="sidebarright"> 
							<?php print render($page['right']); ?>
					</aside>


					<section id="main">
									<?php print $messages; ?>
	   <?php print render($page['help']); ?>
   	   <?php print render($tabs); ?>

							 <?php  if(!$is_front) print render($page['content']); ?>
							 <?php print render($page['promo']) ; ?>

					</section>


					

					
			</div>
				<footer>
							

							<div id<?php print render($page['footer']); ?>
							</div>
				</footer>