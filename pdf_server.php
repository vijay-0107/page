<?php
	header("Content-Type: application/octet-stream");
	$file = $_GET["file"] .".pdf";
	$filename = "CV_intern/".$file;
	header("Content-Disposition: attachment; filename=" . urlencode($file));   
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Description: File Transfer");            
	header("Content-Length: " . filesize($filename));
	flush(); // this doesn't really matter.
	$fp = fopen($filename, "r");
	while (!feof($fp))
	{
		echo fread($fp, 65536);
		flush(); // this is essential for large downloads
	} 
	fclose($fp); 
?>