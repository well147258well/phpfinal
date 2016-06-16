<?php
class PostOffice{
	var $title;
	function mailFiler(){
		$string = fopen('string.txt', "r");
		$contents = fread($string, 100);
		echo $contents;
	}

	function mailRedex(){
		$string = fopen('string.txt', "r");
		$contents = fread($string, 100);
		$clean=preg_replace("/[^A-Za-z0-9]/","", $contents);
		echo $clean;
	}

	function spiltroad(){
		$string = fopen('road.txt', "r");
		$contents = fread($string, 1000);
  		$str=explode(" ",$contents);
  		 for ( $i=0 ; $i<5 ; $i++){
  		 	echo $str[$i];
  		 	echo "</br>";
  		}
	}

}
$file=new PostOffice;
$file->mailFiler();
echo "</br>";
$file->mailRedex();
echo "</br>";
$file->spiltroad();

?>