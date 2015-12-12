<?php 
@session_start();

class Building{

	public function getFaxs(){
		include "connection.php";

		$query="SELECT * FROM buildings WHERE buildingtype=4";

		if (!$q=$mysqli->query($query)){
			echo "<p>An error has occured. Please try later.</p>";
			exit();
		}
		if ($q->num_rows>0){
			return $q;
	}
	$mysqli->close();

}
?>