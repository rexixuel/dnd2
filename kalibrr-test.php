<?php

$inputs = file('input.in');
$numberOfCases = $inputs[0];

$rows = [];
$columns = [];
$grid = [];

$caseNumber = 0;

while ($input = current($inputs))
{
	if(key($inputs) == 0)
	{
		next($inputs);
	}

	$rows[$caseNumber] = current($inputs);
	next($inputs);
	$columns[$caseNumber] = current($inputs);

	next($inputs);
	
	for($counter = 0; $counter <= $rows[$caseNumber]; $counter++)
	{

		$grid[$rows[$caseNumber]] = array(current($inputs));

		next($inputs);
	}

	$caseNumber++;
}

dd($grid);
?>