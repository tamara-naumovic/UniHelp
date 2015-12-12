<?php 


class Faculties{

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

public function returnB($ime){
	include "connection.php";

	$query="SELECT * FROM buildings WHERE (buildingtype=4 AND buildingname='".$ime."') ;";

	if (!$q=$mysqli->query($query)){
		return "<p>There was an error. Please try again later</p>";
		exit();
	}
	if ($q->num_rows==0){
		return "There are no locations in the datebase";
	} else {
		while ($row=$q->fetch_object()){
			
			return $row->buildingdescription;
			
		}
}
}
}
?>