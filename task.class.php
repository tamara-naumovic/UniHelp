<?php
class Task{

	public $description;
	public $category;
	public $location;
	public $parc_number;
	public $org_name;
	public $reward;
	public $exps;
	public $expc;
	public $expo;
	public $partic_id;
	public $job_type;

	public function create($data, $name){
		$this->description=$data['description'];
		$this->category='c';//$data['category'];
		$this->location=$data['location'];
		$this->parc_number=$data['parc_number'];
		$this->org_name=$name;
		$this->reward=$data['reward'];
		$this->exps=$data['exps'];
		$this->expc=$data['exps'];
		$this->expo=$data['exps'];
		$this->partic_id="";
		$this->job_type="Volonter";//$data['job_type'];


	}

	public function writeToDb(){
		
		include "connection.php";
		$query="INSERT INTO tasks (description, category, location, parc_number, org_name, reward, exps, expc, expo, partc_id, job_type) VALUES ('".$mysqli->real_escape_string($this->description)."', '".$this->category."', '".$mysqli->real_escape_string($this->location)."', '".$this->parc_number."', '".$mysqli->real_escape_string($this->org_name)."', '".$mysqli->real_escape_string($this->reward)."', '".$this->exps."', '".$this->expc."', '".$this->expo."', '".$this->partic_id."', '".$mysqli->real_escape_string($this->job_type)."')";
		if ($mysqli->query($query))
		{
			return "Success";
		} 
		else {
			return "<p>There was an error. Please try again later.</p>" . $mysqli->error;
		}

		$mysqli->close();
	}
}