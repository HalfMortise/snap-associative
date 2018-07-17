<?php

$paramArray = [
	["name"=>"Jude", "age"=> 32],
	["name"=>"Ryo", "age"=> 24],
	["name"=>"Joy", "age"=> 35],
	["name"=>"Joe", "age"=> 31],
	["name"=>"Sarah", "age"=> 24]
];

//use this to print array: var_dump($paramArray);
/**
 * This is a function that takes an associative array of people with names an ages and returns an average age
 * @param array sets the parameters: $personsArray an array of people
 * @return int $averageAge average age of people in the array
 **/
//this function will only return as a float (0.0)
function averageAge(array $personsArray) : float {
	$totalAge = 0;
//for each time I go through the array, I want to assign a value to each person
	foreach($personsArray as $person) {
//echo only works on strings or integers
	echo $person["name"] . " is " . $person["age"] . PHP_EOL;
//this means take total age and add on next person's age
	$totalAge += $person["age"];
	}
	echo "The total age is " . $totalAge . PHP_EOL;
	return ($totalAge / count($personsArray));
}

echo ("The average age is ") . averageAge($paramArray) . PHP_EOL;