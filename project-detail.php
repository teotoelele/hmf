<?php include 'header.php'; ?>
<?php include 'header-menu.php'; ?>
	
	<div class="content project_detail">
		<div class="container">
			<div class="img full" style="background: url('img/slide.jpg') top center no-repeat; background-size: cover; padding-bottom: 30%;"></div>

			<div class="dtl_pro">
				<div class="name_dtl">
					<div class="name">
						<h1>
							LA VIE SERVICED APARTMENS
						</h1>
					</div>
					<div class="dtl_">
						
						<ul class="list_ic">
							<?php for ($i=0; $i < 3; $i++): ?>
								<li>
									<div class="ic_ttl">
										<div class="_ic_">
											<img src="img/ic/project_d/ic-1.png">
										</div>
										<div class="_ttl_desc">
											<div class="_ttl_">
												Access to Public Transportation
											</div>
										</div>
									</div>
								</li>
							<?php endfor; ?>
						</ul>
					</div>
				</div>

				<div class="dtl">
					<div class="add_unit">
						<ul class="list_ic three">
							<?php for ($i=0; $i < 6; $i++): ?>
								<li>
									<div class="ic_ttl">
										<div class="_ic_">
											<img src="img/ic/project_d/ic-1.png">
										</div>
										<div class="_ttl_desc">
											<div class="_ttl_">
												Access to Public Transportation
											</div>
											<div class="desc italic">
												This paragraph will explain the benefit of each point highlighted above
											</div>
										</div>
									</div>
									
								</li>
							<?php endfor; ?>
						</ul>
					</div>
				</div>
			</div>

			<div class="gal_pro full">
				<div class="name">
					<h2 class="_ttl">
						ALL SUITES APARTMENS
						DESIGNED FOR PEOPLE
					</h2>
					<div class="desc italic">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. In iste deleniti fugit ut eligendi enim voluptatum eos libero ullam! Sunt deleniti aliquam explicabo consequatur ipsam ratione optio facere corporis quidem.
					</div>

					<div class="contact_">
						<div class="add italic bold f-playfair">
							Address your interest now!
						</div>
						<div class="_ic">
							<a href="#">
								<img src="img/ic-phone-wa.png">
							</a>
						</div>
					</div>
				</div>

				<div class="slide_img">
					<div class="focus_img">
						<img src="img/slide-height.jpg">
					</div>
					<div class="next_img">
						<a href="#"></a>
						<div class="_img full" style="background: url('img/slide.jpg') top center no-repeat; background-size: cover; height: 100%;"></div>
						<div class="dtl_cava">
							<div class="ic">
								<i class="fa fa-angle-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>