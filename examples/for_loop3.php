<?php
$students = array('abu', 'ahmad', 'ali', 'chong', 'raju');

$total = count($students);

for ( $i = 0 ; $i < $total; $i++ )
{
    echo $students[ $i ] . '<br>';
}
