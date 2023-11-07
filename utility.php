<?php
class Utility{
	public static function jsonOperation($file){
		$files='../data/'.$file.'.json';
		$content=file_get_contents($files);
		$php_array=json_decode($content,true);
		$delete_count=0;
		$create_count=0;
		$update_count=0;
		foreach($php_array as $item){
			if ($item == 'delete'){
				$delete_count=$delete_count+1;
			}
			if ($item == 'create'){
				$create_count=$create_count+1;
			}
			if ($item == 'update'){
				$update_count=$update_count+1;
			}
		}
		echo 'There are '.$delete_count.' delete words in the file. </br>';
		echo 'There are '.$create_count.' create words in the file. </br>';
		echo 'There are '.$update_count.' update words in the file.</br>';
	}
}
$check=Utility::jsonOperation('checkjson');
echo $check;