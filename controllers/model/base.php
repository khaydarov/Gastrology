<?php

function getAll($start, $limit)
{

	$sql = "SELECT * FROM bemorho ORDER BY id DESC LIMIT $start, $limit ";
	
	$res = query($sql);
	

	while($row = mysql_fetch_object($res))
		$result[] = $row;

    return $result;
}

function getUserInfo($id)
{
	$sql = "SELECT * FROM users WHERE id='$id'";
	$res = query($sql);

	$row = mysql_fetch_object($res);

	return $row;
}

function getBaseInfo($id)
{
	$sql = "SELECT * FROM bemorho WHERE id='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result = $row;
		
	return $result;
}

function getAllCities() {
    $sql = "SELECT * FROM cities";
    $res = query($sql);
    
    while($row = mysql_fetch_object($res))
            $result[] = $row;
    
    return $result;
}


function getCityById($id) {
	$sql = "SELECT * FROM cities WHERE id='$id'";
	$res = query($sql);

	$result = mysql_fetch_object($res);

	return $result->name; 
}

function getRegionById($id) {
	$sql = "SELECT * FROM viloyat WHERE id='$id'";
	$res = query($sql);

	$result = mysql_fetch_object($res);

	return $result->name; 
}

function checkAnalisys($id)
{
	$sql = "SELECT sid FROM story WHERE sid='$id'";
	$res = query($sql);

	if (mysql_num_rows($res) > 0)
		return 1;
	else 
		return 0;
}

function getStory($id) {
	$sql = "SELECT * FROM story JOIN spart1, spart2, spart3, spart4, spart5, spart6, spart7, spart8 
							WHERE story.spart1 = spart1.id 
							AND story.spart2 = spart2.id
							AND story.spart3 = spart3.id
							AND story.spart4 = spart4.id
							AND story.spart5 = spart5.id
							AND story.spart6 = spart6.id
							AND story.spart7 = spart7.id
							AND story.spart8 = spart8.id
							AND story.sid='$id'";

	$res = query($sql);

	$row = mysql_fetch_object($res);
	return $row;
}

function getEparts($id)
{
	$sql = "SELECT * FROM epart JOIN epart1, epart2, epart3
						WHERE epart.epart1 = epart1.id
						AND epart.epart2 = epart2.id
						AND epart.epart3 = epart3.id
						AND epart.sid = '$id'";
	$res = query($sql);
	$row = mysql_fetch_object($res);
	return $row;
}

function getLastBemor() {
	$sql = "SELECT id FROM bemorho ORDER BY id DESC LIMIT 1";
	$res = query($sql);

	$row = mysql_fetch_object($res);
	return $row->id;
}


function getRadiologi1($id) {
	$sql = "SELECT * FROM radiologi1 WHERE sid='$id'";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result = $row;

	return $result;
}

function getRadiologi2($id) {
	$sql = "SELECT * FROM radiologi2 WHERE sid='$id'";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result = $row;

	return $result;
}

function getTahliliumumiihun($id) {
	$sql = "SELECT * FROM tahlilihun WHERE sid='$id'";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result = $row;

	return $result;
}

function getCommentsFromCstory($sid) {
	$sql = "SELECT * FROM cstory WHERE sid='$sid'";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result[] = $row;

	return $result;
}