<?php
/*
echo '<pre>';
print_r(filter_list());
//print_r(filter_id(filter_list()));
echo '<pre>';*/
$array=[];
$filters=filter_list();

foreach($filters as $filter){
    $filter_id=filter_id($filter);
    array_push($array,$filter_id);
//echo(($filter_id)) . '<br>';

}

/*
echo '<pre>';
print_r(($array)) . '<br>';
echo '<pre>';
*/

echo '<pre>';
print_r(array_combine($array,$filters));
echo '<pre>';

?>