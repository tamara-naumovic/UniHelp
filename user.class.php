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
		$this->exps = 0;
		$this->expc = 0;
		$this->expo = 0;
		$this->tasks_org = 0;
		$this->tasks_parc = 0;
		$this->rank = 0;
	}

	public function writeToDb(){
		
		include "connection.php";
		$query="INSERT INTO korisnici (ime, prezime, email, password, privilegija) VALUES ('".$mysqli->real_escape_string($this->ime)."', '".$mysqli->real_escape_string($this->prezime)."', '".$mysqli->real_escape_string($this->email)."', '".$mysqli->real_escape_string($this->password)."', '".$mysqli->real_escape_string($this->privilegija)."')";
		if ($mysqli->query($query))
		{
			?> <script type="text/javascript">
			window.location.href = 'home.php';
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

		$query="SELECT * FROM korisnici WHERE (email='".trim($mail)."' AND password='".trim($old)."')";

		if (!$q=$mysqli->query($query)){
			echo "<p>An error has occured. Please try later.</p>";
			exit();
		}
		if ($q->num_rows==1){

			$query2="UPDATE korisnici SET password='".$mysqli->real_escape_string($new)."' WHERE (email='".trim($mail)."' AND password='".trim($old)."')";
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
      
      ?>
     <script type="text/javascript">
      window.location.href = 'success.html';
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
