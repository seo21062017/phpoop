<?php

require_once("../vendor/autoload.php");
//$worker = new \App\Worker("Boris", 20, [15, 20, 5]);
$developer = new \App\Developer("Boris", 20, [15, 20, 5]);
$designer = new \App\Designer("Liza", 20, [25, 20, 5]);


$workers = [$developer, $designer];

foreach ($workers as $worker){
    $worker->work();
}















//var_dump((String) $developer);


//var_dump($developer);

//$developer->work();
//$developer->setPosition('develop');
//var_dump($developer->getPosition());
//$developer->rest();
//
//$salary = \App\Salary::count($developer->getHours());
//var_dump(\App\Salary::$TotalHours);
//\App\Salary::$TotalHours = \App\Salary::$TotalHours + 100;
//var_dump(\App\Salary::$TotalHours);
//



//var_dump($salary);