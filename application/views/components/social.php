<style type="text/css" media="screen">
	#social {
		width: 420px;
		height: 50px;
	}

	.social-facebook {
		width: 96px;
		float: left;
	}

	.social-twitter {
		width: 92px;
		float: left;
	}

	.social-orkut {
		width: 94px;
		float: left;
	}

	.social-linkedin {
		width: 80px;
		float: left;
	}
</style>

<section id="social">
	
	<?php $data = current_url(); ?>
		
	<div class="social-facebook">
		<iframe 
		src="http://www.facebook.com/plugins/like.php?href=<?= urlencode($data) ?>&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" 
		scrolling="no" 
		frameborder="0" 
		style="border:none; overflow:hidden; width:450px; height:21px;" 
		allowTransparency="true">
		</iframe>
	</div>
	
	<div class="social-twitter">
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?= $data ?>" data-via="cobraengenharia" data-lang="en">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	
	<div class="social-orkut">
		
		<!-- Google Orkut Share Element -->
		<div id="orkut_share" style="width:100%;"></div><script src="http://www.google.com/jsapi" type="text/javascript"></script><script type="text/javascript">google.load('orkut.share', '1');google.setOnLoadCallback(function(){new google.orkut.share.Button({style:'regular'}).draw('orkut_share');}, true);</script>
		
	</div>
	
	<div class="social-linkedin">
		<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/Share" data-counter="right"></script>
	</div>
	
</section>


