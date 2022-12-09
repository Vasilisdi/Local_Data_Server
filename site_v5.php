
<?php 

ob_start();
//Some initial checks
if (($open = fopen("data.csv","r")) !== FALSE) 
{

$data=[]; 




while (1)
{


//getting the last row for every itteration
$rows = file("data.csv");
$last_row = array_pop($rows);
$stored_data = str_getcsv($last_row,',');

$now = time();

ob_implicit_flush(true);
ob_end_flush();

//creating a table including all the data of the stored row 
//td table columns and tr table rows
echo "<table border = '1'>";
echo '<tr>';


foreach ($stored_data as $i)
{

echo '<td>' .$i. '</td>';

}
echo '</tr>';
echo "</table>";
//ob_start();
ob_flush();
//flush();
ob_end_flush();



sleep(50 - (time()-$now)); //60 seconds itteration of data processing

}

}
?> 

