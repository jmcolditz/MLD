<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<fieldset class="search-form">
		<div class="input-group">
			<input type="search" name="s" id="search" class="form-control" placeholder="" value="<?php the_search_query(); ?>" />
	 	    <span class="input-group-btn">
		      <button class="btn btn-default" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" type="image">Go!</button>
		    </span> 
		</div>
<!-- 		<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />  -->	
	</fieldset>
</form>


