<?php 


function singletable_all( $table, $where = "", $param = "*" ){

include("connect.php");

$sql = "SELECT ".$param." FROM ".$table."  ". $where;
$result = mysqli_query($conn, $sql);
$count_row = 0;
if (mysqli_num_rows($result) > 0) {	
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {	 
	 $post[$count_row] = $row;	 
	 $count_row++;
  }
			
} else {
	$post["error"] = "Not Found";
}


mysqli_close($conn);
	  return  $post;
}
?>
