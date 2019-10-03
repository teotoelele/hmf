<?php include 'header.php'; ?>
<?php include 'header-menu.php'; ?>

	<div class="content home news">
		<div class="container">

			<div class="recent_news full no-mt">
				<ul>
					<?php for ($i=0; $i < 3; $i++): ?>
						<li class="news_ttls">
							<a href="news-detail.php">
								<div class="img">
									<img src="img/slide.jpg">
								</div>	
								<div class="ttl_block">
									<div class="ttl_block_ins">
										<div class="ttl f-playfair">
											Lavie All Suites Apartment's Topping Off Invitation
										</div>
										<div class="date">
											27/05/2017
										</div>

										<div class="readmore">
											<div class="ic">
												<i class="fa fa-angle-right"></i>
											</div>
											<div class="_txt f-playfair">
												read more
											</div>
										</div>
									</div>
								</div>
							</a>
						</li>
					<?php endfor; ?>
				</ul>

				<div class="pagination">
					<ul>
						<?php for ($i=1; $i < 6; $i++): ?>
							<li><a href="#" class="<?php if ($i == 1) {echo('active');} ?>"><?php echo $i ?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>

			<div class="_sidebar">
				<div class="ttl_desc">
					<h3 class="ttl f-playfair">
						<div>Get the latest</div>
						<div>news from us</div>
					</h3>
					<div class="desc">
						<div>Subscribe to our mailing list and</div>
						<div>get the latest news delivered to you</div>
					</div>
				</div>

				<div class="_form">
					<div class="_form-ins">
						<input type="text" placeholder="Your Email">
					</div>
					<div class="btn_cava">
						<input type="button" value="SUBMIT">
					</div>
				</div>
			</div>

		</div>
	</div>

<?php include 'footer.php'; ?>