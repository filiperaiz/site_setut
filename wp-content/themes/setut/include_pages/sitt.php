<div class="about-page page-background">
	<div class="row">
		<div class="col-md-12 ">
			<div class="fullbanner about" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>)">
				<h2 class="title-banner">
					Sitt
				</h2>
			</div>
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
            <i class="fa fa-plus"></i>  
            Consórcio SITT
          </label>
        </div>
        <div class="col-md-4 button-dialog">
          <label class="btn" for="dialog-2">
            <i class="fa fa-plus"></i>  
            Consórcios
          </label>
        </div>
        <div class="col-md-4 button-dialog">
          <label class="btn" for="dialog-3">
            <i class="fa fa-plus"></i>  
            Inthegra
          </label>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 button-dialog">
          <label class="btn" for="dialog-4">
            <i class="fa fa-angle-up"></i>  
            Achados e perdidos
          </label>
        </div>
        <div class="col-md-6 button-dialog">
          <label class="btn" for="dialog-5">
            <i class="fa fa-plus"></i>  
            Entenda sua tarifa
          </label>
        </div>
      </div>

      <!-- Modais -->

      <!-- Modal 1 -->
      <div class="dialog">
        <input class="dialog-open" id="dialog-1" type="checkbox" hidden>
        <div class="dialog-wrap" aria-hidden="true" role="dialog">
          <label class="dialog-overlay" for="dialog-1"></label>
          <div class="dialog-dialog">
            <div class="dialog-header">
              <h2>Titulo do modal</h2>
              <label class="btn-close" for="dialog-1" aria-hidden="true">×</label>
            </div>
            <div class="dialog-body">
              <p>Texto especifico de cada modal</p>
            </div>
            <div class="dialog-footer">
              <label class="btn btn-primary" for="dialog-1">Nice!</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 2 -->
      <div class="dialog">
        <input class="dialog-open" id="dialog-2" type="checkbox" hidden>
        <div class="dialog-wrap" aria-hidden="true" role="dialog">
          <label class="dialog-overlay" for="dialog-2"></label>
          <div class="dialog-dialog">
            <div class="dialog-header">
              <h2>Titulo do modal 2</h2>
              <label class="btn-close" for="dialog-2" aria-hidden="true">×</label>
            </div>
            <div class="dialog-body">
              <p>Texto especifico de cada modal</p>
            </div>
            <div class="dialog-footer">
              <label class="btn btn-primary" for="dialog-2">Nice!</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 3 -->
      <div class="dialog">
        <input class="dialog-open" id="dialog-3" type="checkbox" hidden>
        <div class="dialog-wrap" aria-hidden="true" role="dialog">
          <label class="dialog-overlay" for="dialog-3"></label>
          <div class="dialog-dialog">
            <div class="dialog-header">
              <h2>Titulo do modal 3</h2>
              <label class="btn-close" for="dialog-3" aria-hidden="true">×</label>
            </div>
            <div class="dialog-body">
              <p>Texto especifico de cada modal</p>
            </div>
            <div class="dialog-footer">
              <label class="btn btn-primary" for="dialog-3">Nice!</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 4 -->
      <div class="dialog">
        <input class="dialog-open" id="dialog-4" type="checkbox" hidden>
        <div class="dialog-wrap" aria-hidden="true" role="dialog">
          <label class="dialog-overlay" for="dialog-4"></label>
          <div class="dialog-dialog">
            <div class="dialog-header">
              <h2>Titulo do modal 4</h2>
              <label class="btn-close" for="dialog-4" aria-hidden="true">×</label>
            </div>
            <div class="dialog-body">
              <p>Texto especifico de cada modal</p>
            </div>
            <div class="dialog-footer">
              <label class="btn btn-primary" for="dialog-4">Nice!</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 5 -->
      <div class="dialog">
        <input class="dialog-open" id="dialog-5" type="checkbox" hidden>
        <div class="dialog-wrap" aria-hidden="true" role="dialog">
          <label class="dialog-overlay" for="dialog-5"></label>
          <div class="dialog-dialog">
            <div class="dialog-header">
              <h2>Titulo do modal 4</h2>
              <label class="btn-close" for="dialog-5" aria-hidden="true">×</label>
            </div>
            <div class="dialog-body">
              <p>Texto especifico de cada modal</p>
            </div>
            <div class="dialog-footer">
              <label class="btn btn-primary" for="dialog-5">Nice!</label>
            </div>
          </div>
        </div>
      </div>
    <!-- End Bloco de modais -->
		
		</div>
	</div>
</div>