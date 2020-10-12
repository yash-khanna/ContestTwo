<?php
#this is the  associative arrayfor us
$hello=[
	"Yash"=>"best",
	"mom"=>"fantastic",
	"vaibhav"=>"epic"
];
print_r($hello);
$hello["Dad"]="Also EPic";
print_r($hello);
#to print the specific value we need to add the 
echo "Hello this is yash khanna {$hello["Yash"]} this side";
?>
