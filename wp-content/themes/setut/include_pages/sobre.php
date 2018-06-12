<div class="about-page page-background">
	<div class="row">
		<div class="col-md-12 ">
			<div class="fullbanner about" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)">
				<h2 class="title-banner">
					Setut
				</h2>
			</div>
		</div>
	</div>

	<div class="row no-side-margin side-padding box-padding">
		<div class="page-description col-md-12">
			<?php $content = apply_filters('the_content', $post->post_content); ?>
			<?php echo $content; ?>
		</div>
	</div>

	<div class="row no-side-margin">
			
		<?php $visao = get_post_custom_values( 'visao' ); ?>
		<div class="col-md-6 about-blocks vision">
			<h2 class="title">Visão</h2>
			<p class="descri"> <?php echo $visao[0]; ?></p>
		</div>
		<?php $missao = get_post_custom_values( 'missao' ); ?>
		<div class="col-md-6 about-blocks mission">
			<h2 class="title">Missão</h2>
			<p class="descri"><?php echo $missao[0]; ?></p>
		</div>
	</div>

	<div class="row no-side-margin side-padding box-padding">
		<div class="col-md-12 about-info" style="text-align: center;">
			<h2 class="title" style="text-align: center;">Administração</h2>
			<p class="descri">A Administração do SETUT é exercida por uma Diretoria Executiva composta por
			cinco Empresários do Setor para um mandato de dois anos. Sendo assim
			constituída para o mandato de 2017 e 2018:</p>

			<ul class="list-info">
				<li>Presidente: <b>EDMILSON CARVALHO</b></li>
				<li>Vice Presidente Executivo: <b>ANTÔNIO GALENO</b></li>
				<li>Vice Presidente: <b>MARCELINO LOPES</b></li>
				<li>Diretor Administrativo: <b>ALBERLAN EUCLIDES SOUSA</b></li>
				<li>Diretor Financeiro: <b>HERBERT MIURA</b></li>
			</ul>
		</div>

		
	</div>
</div>