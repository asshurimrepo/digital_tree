<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<h4><i class="fa fa-search"></i> Blog Search...</h4>
	<div class="input-group">
		<input type="text" class="form-control" value="<?php the_search_query(); ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
	                            <i class="fa fa-search"></i>
                            </button>
                        </span>
	</div>
</form>