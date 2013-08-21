<?php

$fh = fopen('php://stdin', 'r');
$end = true;

require_once('Talk/Person/Person.php');

$person = new \Talk\Person\Person;

while($end){
    $inc = 0;
    while($inc < 100000000){
        // waste time for realism
        $inc++;
    }
    $inc = 0;
    $input = fgets($fh, 1024);
    $input = strtolower(trim($input));
    switch($input){
        case 'hello' :
            $person->sayHello();
            break;
        case 'goodbye' :
            $person->sayGoodbye();
            break;
        case 'how are you?' :
            $person->howAmI();
            break;
        default :
            $person->saySomethingInteresting();
    }
}