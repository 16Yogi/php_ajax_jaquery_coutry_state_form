<?php
    $conn = mysqli_connect("localhost:3306","root","","interview");
    if($conn){
        echo "Connection successful";
    }else{
        echo "Connection failed";
    }

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM country_tb";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
		}
	}else if($_POST['type'] == "stateData"){

		$sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
		}
	}

	echo $str;
    // if($_POST['type'] == ""){
    //     $sql = "SELECT * FROM country_tb";
    //     $query = mysqli_query($conn,$sql) or die("Query unsuccessful");
    //     $str = "";
    //     while($row = mysqli_fetch_assoc($query)){
    //         $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
    //     }
    // }else if($_POST['type'] == "stateData"){
    //     $sql = "SELECT * FROM state_tb WHERE country = ${$_POST['id']}";
    //     $query = mysqli_query($conn,$sql) or die("Query unsuccessful");
    //     $str = "";
    //     while($row = mysqli_fetch_assoc($query)){
    //         $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
    //     }
    // }

    // if($_POST['type'] == ""){
    //     $sql = "SELECT * FROM country_tb";
    //     $qry = mysqli_query($conn,$sql);
    //     if($qry){
    //         echo "Query executed";
    //     }else{
    //         echo "Query Failed";
    //     }
        
    //     $str = "";
    //     while($row = mysqli_fetch_assoc($qry)){
    //         $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
    //     }
    // }else if($_POST['type']=="stateData"){
    //     $sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";
    //     $qry = mysqli_query($conn,$sql);
    //     if($qry){
    //         echo "Query executed";
    //     }else{
    //         echo "Query Failed";
    //     }
        
    //     $str = "";
    //     while($row = mysqli_fetch_assoc($qry)){
    //         $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
    //     }
    // }

   

    // echo $str;

?>

