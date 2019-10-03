<?php include 'header.php'; ?>
	
	<div class="header-menu full">
		<div class="container">
			<div class="share project">
				<div class="_txt">
					<span class="bold">RESIDENTIAL SALES PROJECT</span>
					<span>RESIDENTIAL LEASING PROJECT</span>
				</div>

				<div class="btn_bar">
					<a href="#">
						<img src="img/new-bar-white.png">
					</a>
				</div>
			</div>
			<div class="lang">
				<div class="centered">
					<a href="#">IN</a>
					<a href="#" class="active">ENG</a>
				</div>
			</div>
		</div>
	</div>

	<div class="content project">
		<div class="search_property none">
			<div class="container">
				<div class="form_search">
					<div class="centered">
						<div class="form_ins">
							<select name="" id="">
								<option value="">Rent</option>
								<option value="">Test</option>
							</select>
						</div>
						<div class="form_ins">
							<select name="" id="">
								<option value="">House</option>
								<option value="">Test</option>
							</select>
						</div>
						<div class="form_ins">
							<select name="" id="">
								<option value="">Location</option>
								<option value="">Test</option>
							</select>
						</div>

						<div class="_btn">
							<input type="button" value="SEARCH">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container pro">
			<div class="list_project full">
				<?php for ($i=0; $i < 5; $i++): ?>
					<li>
						<div class="img full" style="background: url('img/slide.jpg') top center no-repeat; background-size: cover; padding-bottom: 30%;"></div>

						<div class="ttl_project">
							<a href="project-detail.php">
								<div class="ttl_dtl">
									<div class="_ttl">
										LA VIE SERVICED
										<div>APARTMENTS</div>
									</div>
									<div class="dtl_cava">
										<div class="ic">
											<i class="fa fa-angle-right"></i>
										</div>
										<div class="_txt f-playfair">
											view details
										</div>
									</div>
								</div>
							</a>
						</div>
					</li>
				<?php endfor; ?>
			</div>
		</div>
		<div class="pagination">
			<ul>
				<?php for ($i=1; $i < 6; $i++): ?>
					<li><a href="#" class="<?php if ($i == 1) {echo('active');} ?>"><?php echo $i ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>

<?php include 'footer.php'; ?>