<? if($data->tipo == Banner::TIPO_IMAGEM) { ?>
	<a href="<?= $data->link ?>" target="_blank"><img src="<?= $data->src ?>" title="" class="banner" /></a>
<? } else { ?>
	<div class="banner" style="width:100%; height:100%">
		<object 
			type="application/x-shockwave-flash"
			data="<?= $data->src ?>?link=<?= $data->link ?>" 
			width="100%" 
			height="100%" 
			style="visibility: visible; width: 100%; height: 100%; ">
				<param name="menu" value="false">
				<param name="scale" value="noScale">
				<param name="allowFullscreen" value="true">
				<param name="allowScriptAccess" value="always">
				<param name="bgcolor" value="#fff">
			</object>
	</div>
<? } ?>
