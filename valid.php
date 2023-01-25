  <?php
    $dsn = "mysql:host=0.0.0.0;dbname=db";
$user = "root";
$passwd = "password";
$uname=$_POST['username'];
$pass=$_POST['password'];
$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT * from users where username='$uname' and password='$pass'");
$data = $stm->fetchALL();

if($data != null && $data){
echo "login";
}else{
echo "not ogin";
}
print_r($version);
    ?>  
	
