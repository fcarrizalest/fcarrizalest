 <?php 
require_once dirname ( __FILE__ ) . "/thumbrio.php";

 if ($teaser): ?>

 	<article class = "row" itemscope itemtype="http://schema.org/Article" >
											 <h2 > <a href="<?php print $node_url; ?>" itemprop="name" ><?php print $title; ?></a></h2>
											  <?php if (isset($content['field_image'])): ?>
											<figure class="rowFig"> 
													<?php // print render($content['field_image']); 



													$u = str_replace( "public:/", "http://fcarrizalest.com/sites/fcarrizalest.com/files" , $content['field_image']['#object']->field_image['und'][0]['uri']);
														
														$nI = $content['field_image']['#object']->field_image['und'][0]['filename'];
														$uEncode = thumbrio($u,"70x70c-emarc-eframe10", $content['field_image']['#object']->field_image['und'][0]['filename']);

															 
													?>	
														<img  alt="<?php echo $nI ?>" title="<?php echo $nI ?>" src="<?php echo $uEncode ?>" />
												
											</figure>

											<?php endif; ?>
<?php
													    	hide($content['field_image']);
													    	hide($content['field_tags']);
       														 hide($content['comments']);
											 print render($content);
?>

											
									</article>	



  <?php endif; ?>







<?php if ($page == 1 || $page == 0 && $teaser == 0): ?>


	<article id="cArticle" itemscope itemtype="http://schema.org/Article" >
												<h1 itemprop="name" > <?php print $title; ?> </h1>
												<?php if (isset($content['field_image'])): ?>
																								

												<figure class="rowFig" >

													<?php

													$u = str_replace( "public:/", "http://fcarrizalest.com/sites/fcarrizalest.com/files" , $content['field_image']['#object']->field_image['und'][0]['uri']);
														
														$nI = $content['field_image']['#object']->field_image['und'][0]['filename'];
														$uEncode = thumbrio($u,"499x290c-eframe10", $content['field_image']['#object']->field_image['und'][0]['filename']);

															 
													?>	
														<img  alt="<?php echo $nI ?>" title="<?php echo $nI ?>" src="<?php echo $uEncode ?>" />
												</figure>
												 <?php endif; ?>
												 	 <div class="social">
													</div>

										
												 <?php hide($content['field_image']);
												 hide($content['field_galeria']);

												print render($content);
												?>


												<a href="https://www.digitalocean.com/?refcode=ee109fde97fd">
													


													<?php // print render($content['field_image']); 



													 //$u = str_replace( "public:/", "http://fcarrizalest.com/sites/fcarrizalest.com/files" , $content['field_image']['#object']->field_image['und'][0]['uri']);
														
														$nI = "ssd-virtual-servers-banner-320x50.jpg";
														$uEncode = thumbrio("https://88adafc72127a4417182d723eaefb7e7a0720725.googledrive.com/host/0BzTv8wZGN_ZlbEZ0RkE4TnprS2M/ssd-virtual-servers-banner-320x50.jpg","320x50", "ssd-virtual-servers-banner-320x50.jpg");

															 
													?>	
														<img  alt="<?php echo $nI ?>" title="<?php echo $nI ?>" src="<?php echo $uEncode ?>" />
												

													<img src="" />
												</a> 
												

										</article>


<?php endif; ?>

