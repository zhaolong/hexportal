<?php
//print_r($_SERVER);die();
if(@$_SERVER[HTTP_IF_NONE_MATCH]){
	@header('HTTP/1.1 304 Not Modified');
	@header('Cache-Control: max-age=3156000');
	@header('Etag:'.@$_SERVER[HTTP_IF_NONE_MATCH]);
	die();
}
$o=split("&v=",$_SERVER['QUERY_STRING']);
$x=split("\+",$o[0]);
$headered=0;
foreach($x as $file){
	$fa=split("\.",$file);
	if(!$headered){
		if($fa[(count($fa)-1)]=="js"){
			@header('Content-Type:application/javascript');
		}else if($fa[(count($fa)-1)]=="css"){
			@header('Content-Type:text/css');
		}
		@header('Cache-Control: max-age=3156000');
		if(@$_GET['v'])@header('Etag:'.@$_GET['v']);
	}

	if($fa[(count($fa)-1)]!="js"&&$fa[(count($fa)-1)]!="css"){
		die($file." was a bad file ext.");
	}
	if(!file_exists($file)){
		die($file." does not exists.");
	}else{
		$fc=file_get_contents($file);
		if($fa[(count($fa)-1)]=="css"){
			for($i=0;$i<10;$i++){
				ereg("\@import\ url\(\'([a-zA-Z0-9\.\-\_]{5,}\.css)\'\)\;",$fc,$arr);
				$zzcss="css/".$arr[1];
				
				//print_r($arr);
				if($arr[1]!=""&&$arr[1]!=" ")$fc=str_replace($arr[0],"\r\n".file_get_contents($zzcss)."\r\n",$fc);
			}
			//die();
		}
		echo str_replace('../','./',$fc)."\r\n";
	}
}
?>