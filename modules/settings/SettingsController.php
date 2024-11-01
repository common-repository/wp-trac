<?php

class SettingsController extends PropelController
{
    public function SettingsController ()
    {
    	if(empty($_GET['action'])) {
			$this->index();
		} else {	
			if(in_array($_GET['action'], $actions)) {
				$this->$_GET['action']();
			} else {
				$this->index();
			}
		}    	
    }
    
    private function index()
    {
        if(!empty($_POST['propel_file_path'])) {
	    	if( get_option('propel_file_path') != $_POST['propel_file_path']) {
	    		update_option('propel_file_path', $_POST['propel_file_path']);
	    	} else {
	    		add_option('propel_file_path', $_POST['propel_file_path']);
	    	}
	    	
	        if( get_option('propel_list') != $_POST['propel_list']) {
	    		update_option('propel_list', $_POST['propel_list']);
	    	} else {
	    		add_option('propel_list', $_POST['propel_list']);
	    	}    	
	
	        if( get_option('propel_white_list') != $_POST['propel_white_list']) {
	    		update_option('propel_white_list', $_POST['propel_white_list']);
	    	} else {
	    		add_option('propel_white_list', $_POST['propel_white_list']);
	    	}   

	    	if( get_option('propel_black_list') != $_POST['propel_black_list']) {
	    		update_option('propel_black_list', $_POST['propel_black_list']);
	    	} else {
	    		add_option('propel_black_list', $_POST['propel_black_list']);
	    	}   
	    	
	        if( get_option('propel_file_size') != $_POST['propel_file_size']) {
	    		update_option('propel_file_size', $_POST['propel_file_size']);
	    	} else {
	    		add_option('propel_file_size', $_POST['propel_file_size']);
	    	}
    	}
    	
    	require_once ("views/settings.php");	
    }


}

?>