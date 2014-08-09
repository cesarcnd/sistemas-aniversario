<script>
	(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-like" data-href="<?php echo $url_social; ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
<script>
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $url_social; ?>" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical" data-hashtags="AniversarioSistemas">Tweet</a>