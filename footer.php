
	<div class="footer full">
		<div class="container">
			<div class="copyright">
				<div class="_ttl">
					Cava Property
				</div>
				<div class="dsc">
					<div>&copy; CavaProperty 2013. All rights reserved.</div>
					<div>Designed by <a href="#">Greenlab</a></div>
				</div>
			</div>

			<div class="list_footer">
				<ul class="list_footer_ins">
					<li>Ph. +621 2930 5599</li>
					<li>fax. +621 2903 6599</li>
					<li class="_chat">
						Live chat service available <br>
						from 9am to 5pm
					</li>
				</ul>
				<ul class="list_footer_ins">
					<li><a href="index.php">Home</li>
					<li><a href="about.php">About</a></li>
					<li><a href="project.php">Project</a></li>
				</ul>
				<ul class="list_footer_ins">
					<li><a href="news.php">News</a></li>
					<li><a href="career.php">Career</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<ul class="list_footer_ins">
					<li class="bold">Connect with us at</li>
					<li><a href="http://facebook.com/" target="_blank">Facebook</a></li>
					<li><a href="http://instagram.com/" target="_blank">Instagram</a></li>
				</ul>
			</div>
		</div>
		<div class="bgblack"></div>
	</div>


	<div class="live_chat transition" style="bottom: -100px">
		<a href="#">
			<img src="img/live-chat.png">
		</a>
	</div>

<script type="text/javascript">
   $(document).ready(function() {
	    $('.burger-icon').on('click', function(e) {
	   		e.preventDefault();
	     if ($('body').hasClass('open')) {
	      $('body').removeClass('open');
	      // $('.btn-menu i').attr('class', 'fa fa-bars');
	     } else {
	      $('body').addClass('open');
	      // $('.btn-menu i').attr('class', 'fa fa-times');
	     }
	    });

		$('._search_property').on('click', function(){
			if ($('.content.project .search_property').css('display') == 'none') {
				$('.content.project .search_property').slideDown();
				$('.content.project .container.pro').addClass('black');
			} else {
				$('.content.project .search_property').slideUp();
				$('.content.project .container.pro').removeClass('black');
			}
		})

   });


   $(window).scroll(function(){
			if ($(window).scrollTop() >= 800) {
					$('.live_chat').css({bottom: '100px'})
			} else {
				$('.live_chat').css({bottom: '-100px'})
			}
   });
  </script>
</body>
</html>
