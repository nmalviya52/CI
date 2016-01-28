<style type="text/css">
	p{
		color:RED;
	}
</style>
<?php 
echo "<p>";
if($er['b']){
	if(!$er['mob']) echo "<centre>PLease check the mobile number, it must be 10digits<br></centre>";
	if(!$er['pass']) echo "<centre>PLease check the password, password should contain atleast 8 characters<br></centre>";
	if(!$er['name']) echo "<centre>PLease check the name, it cannot contain spl characters and numbers<br></centre>";
	if(!$er['email']) echo "<centre>PLease check the email id<br></centre>";

}
else if($er['lb']){
	echo $er['er'];
}
echo "</p>";
?>