 <?php if ($teaser): ?>

 	<article class = "row" itemscope itemtype="http://schema.org/Article" >
											 <h2 > <a href="<?php print $node_url; ?>" itemprop="name" ><?php print $title; ?></a></h2>
											  <?php if (isset($content['field_image'])): ?>
											<figure class="rowFig"> 
													<?php print render($content['field_image']); ?>
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
														<img  src="http://placehold.it/499x290" />
												</figure>
												 <?php endif; ?>
												 	 <div class="social">
													<div class="fb-share-button" data-href="<?php print $node_url; ?>" data-height="100"  data-width="120"  data-type="box_count"></div>
													<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="http://fcarrizalest.com/<?php print $node_url; ?>"></div>
													<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://fcarrizalest.com/<?php print $node_url; ?>" data-text="<?php print $title; ?>" data-via="Fcarrizalest" data-lang="es">Twittear</a>
<script id='fb38cos'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='//api.flattr.com/button/view/?uid=fcarrizalest&url='+encodeURIComponent(document.URL);f.title='Flattr';f.height=62;f.width=55;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('fb38cos');</script>
													</div>

												 <?php hide($content['field_image']);
												print render($content);
												?>
												<span itemprop="author" itemscope itemtype="http://schema.org/Person">
<span itemprop="name">Francisco Carrizales</span></span>
											

										</article>


<?php endif; ?>

