<?php
$person = [
    'name' => 'abu',
    'age'    => 22,
    'position' => 'accountant'
];

foreach ( $person as $key => $value )
{
    echo $key . ' '  . $value . '<br>' ;
}


/* output
name abu
age 22
position accountant
*/
