<?php
require_once('./config/dbConfig.php');
require_once('./config/dbConnect.php');

class dbFunction
{
	public $db;
	function __construct()
	{
		// connecting to database
		$this->db = new dbConnect();
	}
	// destructor
	function __destruct()
	{
	}
	public function UserRegister($username, $emailid, $password)
	{
		$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
		$password = md5($password);
		$qr = $db->query("INSERT INTO users(username, emailid, password) values('" . $username . "','" . $emailid . "','" . $password . "')") or die($db->connect_error);
		return $qr;
	}
	public function Login($username, $password)
	{
		$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
		$res = $db->query("SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . md5($password) . "'");
		$user_data = $res->fetch_array();

		print_r($user_data);
		$no_rows = $res->fetch_array();

		if ($no_rows == 1) {

			$_SESSION['login'] = true;
			$_SESSION['uid'] = $user_data['id'];
			$_SESSION['username'] = $user_data['username'];
			$_SESSION['email'] = $user_data['emailid'];
			return TRUE;
		} else {
			return FALSE;
		}
	}
	public function isUser($username)
	{
		$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
		$qr = $db->query("SELECT * FROM users WHERE username = '" . $username . "'");
		$row = $qr->fetch_array(MYSQLI_NUM);
		if ($row > 0) {
			return true;
		} else {
			return false;
		}
	}
}
