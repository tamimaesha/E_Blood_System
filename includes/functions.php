<?php 

  function apos(){
	  global $connection;
	  $apos='A+';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
  function aneg(){
	  global $connection;
	  $apos='A-';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
  function bpos(){
	  global $connection;
	  $apos='B+';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
  function bneg(){
	  global $connection;
	  $apos='B-';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
   function abpos(){
	  global $connection;
	  $apos='AB+';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	function abneg(){
	  global $connection;
	  $apos='AB-';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
	function opos(){
	  global $connection;
	  $apos='O+';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
	function oneg(){
	  global $connection;
	  $apos='O-';
	  $get_apos="select * from `donor_reg` where `blood_group`='$apos'";
	  $query=mysqli_query($connection, $get_apos);
	  $row_num=mysqli_num_rows($query);
	  echo $row_num;
	  return $row_num;
	  }
	  
	  

?>