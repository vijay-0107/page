<?php
	$file = fopen("../intern","r");
	$output = fopen("output","r");
	while($entry = fgets($file)){
		$array = str_split($entry);
		$strout = "";
		$char;
		for($i=0;$i<count($array);$i++){
			$char = $array[$i];
			if($i==8){
				$char = ":";
			}
			$strout=$strout.$char;
		}
		fwrite($output, $strout);
	}
	echo "done";
	fclose($file);
	fclose($output);
?>