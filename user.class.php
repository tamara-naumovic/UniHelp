<?php 
@session_start();

class User{

	public $user_id; 
	public $name;
	public $email;
	public $password;
	public $fax;
	public $exps;
	public $expc;
	public $expo;
	public $tasks_org;
	public $tasks_parc;
	public $rank;

	public function create($data){
		$this->name = $data['name'];
		$this->email = $data['email'];
		$this->password = $data['password'];
		$this->fax = $data['fax'];
		$this->exps = 50;
		$this->expc = 50;
		$this->expo = 50;
		$this->tasks_org = 0;
		$this->tasks_parc = 0;
		$this->rank = 0;
	}

	public function writeToDb(){
		
		include "connection.php";
		$query="INSERT INTO users (name, email, password, fax, exps, expc, expo, tasks_org, tasks_parc, rank) VALUES ('".$mysqli->real_escape_string($this->name)."', '".$mysqli->real_escape_string($this->email)."', '".$mysqli->real_escape_string($this->password)."', '".$mysqli->real_escape_string($this->fax)."', '".$mysqli->real_escape_string($this->exps)."', '".$mysqli->real_escape_string($this->expc)."', '".$mysqli->real_escape_string($this->expo)."', '".$mysqli->real_escape_string($this->tasks_org)."', '".$mysqli->real_escape_string($this->tasks_parc)."', '".$mysqli->real_escape_string($this->rank)."')";
		if ($mysqli->query($query))
		{
			?> <script type="text/javascript">
			window.location.href = 'success.php';
			</script>
			<?php
		} 
		else {
			return "<p>There was an error. Please try again later.</p>" . $mysqli->error;
		}

		$mysqli->close();
	}

	public function changePass($new, $old, $mail) {

		include "connection.php";

		$query="SELECT * FROM users WHERE (email='".trim($mail)."' AND password='".trim($old)."')";

		if (!$q=$mysqli->query($query)){
			echo "<p>An error has occured. Please try later.</p>";
			exit();
		}
		if ($q->num_rows==1){

			$query2="UPDATE users SET password='".$mysqli->real_escape_string($new)."' WHERE (email='".trim($mail)."' AND password='".trim($old)."')";
			if (!$q2=$mysqli->query($query2)){
				echo "<p>An error has occured. Please try later.</p>";
				exit();
			}

			return "Password updated successfully!";
		}

		else
		{
			return "Invalid UserName or Password";         
		}
		$mysqli->close();
	}

	public function logIn($mail, $pass){
	include "connection.php";

    $query="SELECT * FROM users WHERE (email='".trim($mail)."' AND password='".trim($pass)."')";

     if (!$q=$mysqli->query($query)){
      return "<p>An error has occured. Please try later.</p>";
      
    }
    if ($q->num_rows==1){

      $_SESSION['use']=$mail;
      $_SESSION['id']=$q->fetch_object()->user_id;
      
      ?>
     <script type="text/javascript">
      window.location.href = 'home.php';
      </script>

      <?php 
    }

    else
    {
      return "invalid UserName or Password";        
    }
    $mysqli->close();
	}

}

?>
