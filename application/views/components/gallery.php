<?
	$id = "gallery-id-" . uniqid() . uniqid();
?>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var target 	= ".gallery.<?= $id ?>";
		var gallery = $(target + " .gallery-slides");
		gallery.cycle({
				fx:     "fade",
				speed:   300,
				timeout: 3000,
				next: target + " .gallery-controls .next",
				prev: target + " .gallery-controls .prev"
		});
		
		$(target).hover(
			function() { $(target + " .gallery-controls").stop().fadeTo("fast", 1); },
			function() { $(target + " .gallery-controls").stop().fadeTo("fast", 0); }
		);
		
		$(target + " .gallery-controls").stop().fadeTo("fast", 0);
		
		//controls
		$(target + " .gallery-controls .resume").click(function() 	{ gallery.cycle("resume"); return false; });
		$(target + " .gallery-controls .pause").click(function() 	{ gallery.cycle("pause"); return false; });
	});
	
</script>

<div class="gallery <?= $id ?>">
	<div class="gallery-controls">
		<a href="javascript:void(0)" class="gallery-control prev">Voltar</a>
		<a href="javascript:void(0)" class="gallery-control next">Avançar</a>
		<a href="javascript:void(0)" class="gallery-control pause">Pausar</a>
		<a href="javascript:void(0)" class="gallery-control resume">Animar</a>
	</div>
	<div class="gallery-slides">
		<? foreach ($data as $item) { 
				if($item[0] == "<") { //iframe
					echo $item;
				}
				else { //image url ?>
					<img src="<?= $item ?>" title=""/>
				<? }
			}
		?>
	</div>
</div>