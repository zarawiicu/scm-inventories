<?php 
	function import_config($config_file) {
		$CI =& get_instance();
		$CI->config->load($config_file);
		foreach ($CI->config->item($config_file) as $key => $value) {
			$GLOBALS[$key] = $value;
		}
	}
	
?>
