<?php 

//Plugin Name: cat meta

function cat_img_term_meta(){
	?>
	<div class="form-field ">
	<label for="cat_term_img">Name</label>
	<input name="cat_term_img" id="cat_term_img" type="text" value="" size="40" aria-required="true">
	<p>Add category Image</p>
	</div>
	<?php
}
add_action('category_add_form_fields','cat_img_term_meta');