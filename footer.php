<footer 
	<?php
		if($_GET['b'] == "catering" || $_GET['b'] == "contact" || $_GET['b'] == "menu") {
			echo "class='blueFooter'";
		}
	?>
	>
		<div class="clear">
			<div class="triangles triangleLeft invertedTriangle">
			</div> <!-- END .TRIANGLES .TRIANGLELEFT .INVERTEDTRIANGLE -->
			<div class="triangles triangleRight invertedTriangle">
			</div> <!-- END .TRIANGLES .TRIANGLELEFT .INVERTEDTRIANGLE -->
		</div>
		<div>		
			<section class="wrapper clear">
				<div>
					<div class="clear">
						<div class="innerStructureFooter">
							<ul>
								<li><h4>Boston</h4></li>
								<li>3 Lewis Street</li>
								<li>Boston, MA</li>
								<li>Mo - Su 11AM - 9PM</li>
								<li>(617) 248-9537</li>
							</ul>
						</div>
						<div class="innerStructureFooter">
							<ul>
								<li><h4>Medford</h4></li>
								<li>24 Riverside Ave.</li>
								<li>Medford, MA</li>
								<li>Mo - Su 9AM - 9PM</li>
								<li>(781) 395-2221</li>
							</ul>
						</div>
						<div class="innerStructureFooter">
							<ul>
								<li><h4>Coming Soon!</h4></li>
								<li>Davis Square</li>
								<li>382 Highland Ave.</li>
								<li>Somerville, MA</li>
							</ul>
						</div>
					</div>
					<div class="socialFooter">
						<h4>Find Us On:</h4>
					    <ul>
					    	<li><img src="images/twitterLogo.png"></li>
					    	<li><img src="images/fbLogo.png"></li>
					    	<li><img src="images/instaLogo.png"></li>
					    	<li><img src="images/yelpLogo.png"></li>
					    </ul>
	          		</div>
			</div>
			<div>
				<div class="footerTwitter">
					<h4>Keep Up With Us</h4>
            		<a class="twitter-timeline"  href="https://twitter.com/prototype_ytp" data-widget-id="662087654511611904" data-chrome="noscrollbar noheader transparent" height="220px">Tweets by @prototype_ytp</a>
            		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>          
          		</div>
			</div>
		</section>
	</footer>
</body>
</html>