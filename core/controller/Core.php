<?php

class Core {

	public static function redir($url){
		echo "<script>window.location='".$url."';</script>";
	}

	public static function alert($text){
		echo "<script>alert('".$text."');</script>";
	}

	public static function includeJS(){
		$path = "res/js/";
		$handle=opendir($path);
		if($handle){
			while (false !== ($entry = readdir($handle)))  {
				if($entry!="." && $entry!=".."){
					$fullpath = $path.$entry;
				if(!is_dir($fullpath)){
						echo "<script type='text/javascript' src='".$fullpath."'></script>";

					}
				}
			}
		closedir($handle);
		}

	}

}
?>