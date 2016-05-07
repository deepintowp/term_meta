<?php 

//Plugin Name: cat meta

function cat_img_term_meta(){
	wp_nonce_field(basename(__FILE__),'cat_img_nonce');
	?>
	<div class="form-field ">
		<label for="cat_term_img">Name</label>
		<input name="cat_term_img" id="cat_term_img" type="text" value="" size="40" aria-required="true">
		<div class="cat-img-con"></div>
		<input type="button" id="add_cat_img" class="button button-primary cat__img" value="Add Image" />
		<p>Add category Image</p>
	</div>
	<?php
}
add_action('category_add_form_fields','cat_img_term_meta');



function cat_img_save_meta($term_id){
	if(!isset($_POST['cat_img_nonce'])){
		return;
	}
	if(!wp_verify_nonce($_POST['cat_img_nonce'], basename(__FILE__) )){
		return;
	}
	if(isset($_POST['cat_term_img'])){
		update_term_meta($term_id, 'cat_term_img', esc_url_raw($_POST['cat_term_img']) );
	}
	
	
}
add_action('create_category','cat_img_save_meta');
add_action('edit_category','cat_img_save_meta');