<?php
include '../connection/db.php';
function check_email(){
	global $db;
	if(isset($_POST['check_email'])){
		$email = $_POST['check_email'];
		$query = $db->prepare("SELECT email FROM users WHERE email = ?");
		$query->execute(array($email));
		if($query->rowCount() == 0){
			echo json_encode(array('error' => 'email_success'));
		}else{
			echo json_encode(array('error' => 'email_fail', 'message' => 'Sorry, this email already exists'));
		}
	}


} //close check  email method
check_email();

function signup_submit(){
	global $db;
	if(isset($_GET['signup']) && $_GET['signup'] == 'true') {
		$name= $_POST['name'];
		$email= $_POST['email'];
		$password= password_hash($_POST['name'], PASSWORD_DEFAULT);
		$query = $db->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
		$query->execute([$name, $email, $password]);
		if($query){
			$_SESSION['user_name'] = $name;
			echo json_encode(['error' => 'success', 'msg' => 'success.php']);
		}
	}
}
signup_submit();

?>