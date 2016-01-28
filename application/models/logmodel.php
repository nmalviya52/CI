<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logmodel extends CI_Controller{

public function register($in){
	//echo password_hash($in['pass'], PASSWORD_DEFAULT, sha512);
	$password = $in['pass'];
	$hash = hash("sha512",$password);
	//echo $hash;	
	$qry = "SELECT * FROM users WHERE mobile = $in[mob]";
	$i = $this->db->query($qry);
	$i = $i->result_array();
	if(!$i){
	echo "pass";

		$qry = "SELECT * FROM users WHERE email = '$in[email]'";
		$ix = $this->db->query($qry);
		
		$ix = $ix->result_array();
		var_dump($ix);
		if(sizeof($ix)!=0) return false;

		$qry = "INSERT INTO users (mobile,name,email,password,type) values ('$in[mob]','$in[name]','$in[email]','$hash','$in[type]')";
		$this->db->query($qry);
		setcookie('userdata',$in['name']);
		setcookie('mobile',$in['mob']);
		setcookie('type', $in['type']);
			session_start();
			$_SESSION["is_logged"] = 1;
			$_SESSION["type"] = $in['type'];

		return true;
			}
	else {
		return false;
	} 
	}
public function login($in)
{	
	$password = $in['pass'];
	$hash = hash("sha512",$password);
	//echo $password.$in['mob'];
	$qry = "SELECT * FROM users WHERE mobile = '$in[mob]'";
	$i = $this->db->query($qry);
	$i = $i->result_array();
	//var_dump($i);
	if(!$i){
		return 0;
	}
	else 
	{
		if($i[0]['password'] != $hash) return 1;
		else {
			setcookie('userdata',$i[0]['name']);
			setcookie('mobile',$in['mob']);
			setcookie('type',$i[0]['type']);

			session_start();
			$_SESSION["is_logged"] = 1;
			$_SESSION["is_admin"] = 0;
			$_SESSION['type'] = $i[0]['type'];
			//echo $i[0]['type'];

			return $i;}
	}
	
}
		public function pull()
	{
		$query=$this->db->query("SELECT `Proj_Name`, `Cust_Name`, `Vend_Name`, `Status` FROM `progress` WHERE `Status` <'100' ORDER BY `SNo` ASC ");

		$query=$query->result_array();
		return $query;
	}
public function search($q){
	$query = "SELECT Proj_Name FROM progress";
	$in = $this->db->query($query);
	$in=$in->result_array();
	$len=strlen($q);
	$hint['size']=0;
	$j = 0;
	// echo $in[1]['Proj_Name'];
	  for($i=0;$i<sizeof($in);$i++) {
	  	$name = $in[$i]['Proj_Name'];
	  	   if (stristr($q, substr($name, 0, $len))) {
            $hint[$j++] = $name;
        }
        //return $q;


}
$hint['size'] = $j;
// for($i=0;$i<$j;$i++){
// 	echo $hint[$i];
// }
return $hint;
}

}
?>