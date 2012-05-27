<a href="<?= action_empreendimentos_detalhe($data->id, $data->nome) ?>" class="empreendimento-destaque">
	
	<span class="empreendimento-destaque-nomes">
		<span class="empreendimento-destaque-local">
			<?= $data->local ?>
		</span>

		<span class="empreendimento-destaque-nome">
			<?= character_limiter($data->nome, 27) ?>
		</span>
	</span>
	
	<img class="empreendimento-destaque-thumb" src="<?= $data->thumb ?>" title=""/>
	<!-- <img class="empreendimento-destaque-thumb" src="<?= URL_UPLOAD ?>destaque.png" title=""/> -->
	<? if($data->tipo == Empreendimento::TIPO_LANCAMENTO) { ?>
		<span class="empreendimento-destaque-tag lancamento"></span>
	<? } ?>
	
	<? if($data->tipo == Empreendimento::TIPO_OBRA) { ?>
		<span class="empreendimento-destaque-tag obra"></span>
	<? } ?>
	
	<? if($data->tipo == Empreendimento::TIPO_CONCLUIDO) { ?>
		<span class="empreendimento-destaque-tag concluido"></span>
	<? } ?>
	
</a>