<?php
	  include('db_connect.php');
	 function getAllslider(){
	 	global $con;
	 	$sql="SELECT * FROM slider WHERE status=1 ORDER BY id DESC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }
	 ?>