<div class="about-page page-background">
	

    <?php $link = get_post_custom_values( 'link' ); ?>
    <div class="row">
		<div class="col-md-12 ">
			 
            <?php if($link!=NULL and !empty($link)){ ?>
            <a href="<?php echo $link[0] ?>">
            <?php } ?>

            <div class="fullbanner about" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)">
				<h2 class="title-banner">
					Sitt
				</h2>
			</div>

            <?php if($link!=NULL and !empty($link)){ ?>
            </a>
            <?php } ?>

		</div>
	</div>

	<div class="row no-side-margin side-padding box-padding">
		<div class="page-description col-md-12">

			<?php $content = apply_filters('the_content', $post->post_content); ?>
			<?php echo $content; ?>

            <!-- Bloco de modais -->
            <!-- Botoes dos modais -->
            <div class="row">
                <div class="col-md-4 button-dialog">
                    <label class="btn" for="dialog-1">
                        <i class="fa fa-book"></i>  
                        Consórcio SITT
                    </label>
                </div>
                <div class="col-md-4 button-dialog">
                    <label class="btn" for="dialog-2">
                        <i class="fa fa-book"></i>  
                        Consórcios
                    </label>
                </div>
                <div class="col-md-4 button-dialog">
                    <label class="btn" for="dialog-3">
                        <i class="fa fa-book"></i>  
                        Inthegra
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 button-dialog">
                    <label class="btn" for="dialog-4">
                      <i class="fa fa-book"></i>  
                      Achados e perdidos
                    </label>
                </div>
                <div class="col-md-6 button-dialog">
                    <label class="btn" for="dialog-5">
                        <i class="fa fa-book"></i>  
                        Entenda sua tarifa
                    </label>
                </div>
            </div>

            <!-- Modais -->

            <!-- Modal 1 -->
            <?php $consorcio_SITT = get_page_by_title('Consórcio SITT');?>
            <div class="dialog">
                <input class="dialog-open" id="dialog-1" type="checkbox" hidden>
                <div class="dialog-wrap" aria-hidden="true" role="dialog">
                    <label class="dialog-overlay" for="dialog-1"></label>
                    <div class="dialog-dialog">
                        <div class="dialog-header">
                            <h2>Consórcio SITT</h2>
                            <label class="btn-close" for="dialog-1" aria-hidden="true">×</label>
                        </div>
                        <div class="dialog-body">
                            <p><?php echo $consorcio_SITT->post_content ?></p>
                        </div>
                       
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <?php $consorcios = get_page_by_title('Consórcios');?>
            <div class="dialog">
                <input class="dialog-open" id="dialog-2" type="checkbox" hidden>
                <div class="dialog-wrap" aria-hidden="true" role="dialog">
                    <label class="dialog-overlay" for="dialog-2"></label>
                    <div class="dialog-dialog">
                        <div class="dialog-header">
                            <h2>Consórcios</h2>
                            <label class="btn-close" for="dialog-2" aria-hidden="true">×</label>
                        </div>
                        <div class="dialog-body">
                            <p><?php echo $consorcios->post_content ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <?php $inthegra = get_page_by_title('Inthegra');?>
            <div class="dialog">
                <input class="dialog-open" id="dialog-3" type="checkbox" hidden>
                <div class="dialog-wrap" aria-hidden="true" role="dialog">
                    <label class="dialog-overlay" for="dialog-3"></label>
                    <div class="dialog-dialog">
                        <div class="dialog-header">
                            <h2>Inthegra</h2>
                            <label class="btn-close" for="dialog-3" aria-hidden="true">×</label>
                        </div>
                        <div class="dialog-body">
                            <p><?php echo $inthegra->post_content ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <?php $achados_perdidos = get_page_by_title('Achados e perdidos');?>
            <div class="dialog">
                <input class="dialog-open" id="dialog-4" type="checkbox" hidden>
                <div class="dialog-wrap" aria-hidden="true" role="dialog">
                    <label class="dialog-overlay" for="dialog-4"></label>
                    <div class="dialog-dialog">
                        <div class="dialog-header">
                            <h2>Achados e perdidos</h2>
                            <label class="btn-close" for="dialog-4" aria-hidden="true">×</label>
                        </div>
                        <div class="dialog-body">
                            <p><?php echo $achados_perdidos->post_content ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>        

            <!-- Modal 5 -->
            <?php $entenda_tarifa = get_page_by_title('Entenda sua tarifa');?>
            <div class="dialog">
                <input class="dialog-open" id="dialog-5" type="checkbox" hidden>
                <div class="dialog-wrap" aria-hidden="true" role="dialog">
                    <label class="dialog-overlay" for="dialog-5"></label>
                    <div class="dialog-dialog">
                        <div class="dialog-header">
                            <h2>Entenda sua tarifa</h2>
                            <label class="btn-close" for="dialog-5" aria-hidden="true">×</label>
                        </div>
                        <div class="dialog-body">
                            <p><?php echo $entenda_tarifa->post_content ?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- End Bloco de modais -->
		
		</div>
	</div>
</div>