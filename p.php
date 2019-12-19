<?php
$conn=new mysqli("localhost","root","rootroot","project2");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	else{echo"sorry:prblem";}
if(isset($_POST['events'])){
	$events=json_decode($_POST['events'],true);
	
	
	$typee=$events["type"];
	$targett=$events["target"];
	$timee=$events["time"];
	$sql="Insert Into events values('$typee','$targett','$timee')";
	$conn->query($sql);
	if($conn->affected_rows>0){
		echo"inserted successfully";
	}
	elso{
		echo"sorry:prblem";
}}
if(isset($_GET['events'])){

$sql="select*from events";
$conn=new mysqli("localhost","root","admin","database");
if($conn->connect_error){
		die($conn->connect_error);
	}
	if($result=$conn->query($sql)){
		$row=array();
		if($result->num_rows>0)
		{while($row=$result->fetch_assoc()){
			array_push($rows,$row);
		}
		echo json_encode($rows);
			
	}}else{
		echo"no data";
}}










?>