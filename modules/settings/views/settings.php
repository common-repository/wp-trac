<h3>File Settings</h3>
<form method="POST">

	<filedset>
		<label for="propel_file_path">Upload Path: (must be writable ie: chmod 755 and must have a traling slash and windows users are encoruaged to use forward slashes C:/Users/John/www/wordpress/wp-content/files/<br />) </label>
		<input type="text" name="propel_file_path" value="<?php echo get_option('propel_file_path'); ?>" />
		
		<br /><br />
		
		<label for="propel_white_list">White List: (csv) </label>
		<input type="radio" name="propel_list" value="white" <?php echo (get_option('propel_list') == "white") ? "checked" : ""; ?> />
		<input type="text" name="propel_white_list" value="<?php echo get_option('propel_white_list'); ?>" />
		
		<br /><br />
	
		<label for="propel_black_list">Black List: (csv) </label>
		<input type="radio" name="propel_list" value="black" <?php echo (get_option('propel_list') == "black") ? "checked" : ""; ?> />
		<input type="text" name="propel_black_list" value="<?php echo get_option('propel_black_list'); ?>" />
			
		<br /><br />
		
		<label for="propel_file_size">Maximum File Size (in KB): </label>
		<input type="text" name="propel_file_size" value="<?php echo get_option('propel_file_size'); ?>" />
			
		<br /><br />
	</filedset>	
	
	<input type="submit" />
</form>