<?php
/* php function to flattern multidimentional array to single one
*  $array : multidimentional array to be flattern
*/
function flattenMultiArray($array){
	$flattrnArray = array();
	array_walk_recursive($array, function($item) use(&$flattrnArray){
		$flattrnArray[] = $item;
	});
	return $flattrnArray;
}


$aNonFlat = array(1,2,array(3,4,5,array(6,7 ),8,9,),10,11);

$aFlat = flattenMultiArray($aNonFlat);

echo "<pre>";
print_r($aFlat);
echo "</pre>";
