<?php
if(isset($_POST["save"])){
    $Engine1 = $_POST['Engine1'];
    $Engine2 = $_POST['Engine2'];
    $Engine3 = $_POST['Engine3'];
    $Engine4 = $_POST['Engine4'];
    $Engine5 = $_POST['Engine5'];
    $Engine6 = $_POST['Engine6'];
    	// Database connection
	$conn = new mysqli('localhost','root','','sm_robot1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
    else {
		
		$stmt = $conn->prepare("INSERT INTO `robot_arm` (`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`) 
        VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiii", $Engine1, $Engine2, $Engine3, $Engine4, $Engine5, $Engine6) ;
		$stmt->execute();
		echo "Registration successfully...";
		echo "</br>";  
		echo "Engine1 = $Engine1";
		echo "</br>";  
		echo "Engine2 = $Engine2";
		echo "</br>";  
		echo "Engine3 = $Engine3";
		echo "</br>";  
		echo "Engine4 = $Engine4";
		echo "</br>";  
		echo "Engine5 = $Engine5";
		echo "</br>";  
		echo "Engine6 = $Engine6";
	}
	}
if(isset($_POST["On"])){
	$conn = new mysqli('localhost','root','','sm_robot1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
    else {
	  $stmt = $conn->prepare("INSERT INTO `turnon` (`Turn_ON`) Values (1)");
	  $stmt->execute();
	  echo "Robot Arm is ON!";
	}
}
