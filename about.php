<?php include 'header.php'; ?>
<?php include 'header-menu.php'; ?>

	<div class="content about">
		<div class="container">
			<div class="top_img">
				<img src="img/slide-about.jpg">
			</div>
			

			<div class="content-ins full">
				<div class="left_c">
					<h1 class="ttl">
						ABOUT US
					</h1>
				</div>


				<div class="right_c">
					<div class="tagline_mission">
						<div class="tagline f-playfair">
							<div>We are professionals in </div>
							<div>property marketing and </div>
							<div>consulting who always </div>
							<div>carry together our </div>
							<div>experience, knowledge </div>
							<div>and passion to our </div>
							<div>clients.</div>
						</div>
						<div class="service_m">
							<div class="service_m_ins">
								<h2 class="ttl">
									OUR SERVICE
								</h2>
								<div class="tag f-playfair">
									<div>We advise what best</div>
									<div>to achieve what best</div>
								</div>
								<div class="desc nl-space">
									<div>Trough detailed study, we tailor the best</div>
									<div>approach (including size, targets, strategies and </div><div>marketingcommunications) to match</div>
									<div>our client’s expectations.</div>
								</div>
							</div>

							<div class="service_m_ins">
								<h2 class="ttl">
									VISION
								</h2>
								<div class="tag f-playfair">
									More gains, less risks
								</div>
								<div class="desc nl-space">
									<div>We believe it can be achieved with a great</div>
									<div>decision based on our detailed strategies.</div>
								</div>
							</div>

							<div class="service_m_ins">
								<h2 class="ttl">
									MISSION
								</h2>
								<div class="tag f-playfair">
									Our goal is simple
								</div>
								<div class="desc nl-space">
									<div>We want to create a successful story</div>
									<div>with our clients and their projects.</div>
								</div>
							</div>
						</div>
					</div>


					<div class="our_team full">
						<ul>
							<?php for ($i=0; $i < 5; $i++): ?>
								<li>
									<div class="img">
										<img src="img/team.png">
									</div>
									<div class="name_role">
										<div class="_name">
											REYNOLDS DARMADI
										</div>
										<div class="_role f-playfair">
											Founder
										</div>
									</div>
								</li>
							<?php endfor; ?>
						</ul>
					</div>
				</div>
			</div>



		</div>
	</div>

<?php include 'footer.php'; ?>