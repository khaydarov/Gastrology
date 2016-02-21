<?php

include_once('../config/config.php');

 $config = ConnectToDatabase::getInstance();

 $sql_bemorho = "SELECT id, SoliTavallud FROM bemorho";
 $result = $config->query($sql_bemorho);

 while($row = mysql_fetch_object($result))
 	$rows[] = $row;

 for($i = 0; $i < count($rows); $i++)
 {
 	$id = $rows[$i]->id;
 	$birth_date = $rows[$i]->SoliTavallud;

 	$findstr = '-';

 	if (strpos($birth_date, $findstr) !== false) {

	 	$digits = explode('-', $birth_date);
	 	
	 	echo $id.' '.$birth_date.' = ';


	 	$new_date = $digits[0].'.'.$digits[1].'.'.(int)$digits[2];
	 	

	 	$sql = "UPDATE bemorho SET SoliTavallud='$new_date' WHERE id='$id'";
	 	
	 	//echo '<br>';
	 	//echo '<br>';

	 	$config->query($sql);
	}

 }

?>