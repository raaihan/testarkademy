<?php
$host="localhost";
$username="root";
$password="";
$db_name="arka";
$tbl_name="test_mysql";
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$username="";
$password = "";
if (isset($_POST['submit'])) {
	$name=$_POST['username'];
	if(!preg_match("/^[a-zA-Z]*$/",$username)){
			$username_valid = false;
			$username_valid_msg = "Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi.<br>";
		}
$email=$_POST['password'];
if( !empty($username) and !empty($pass) and $username_valid ){
			// Disini tempat menulis kode (semua syarat sudah input terpenuhi).
			// Misalnya menulis kode query ke database
		}
}
$sql="INSERT INTO ar(username, password)VALUES('$username', '$password')";
$result=mysql_query($sql);
if($result){
echo "validasi benar";
}
else {
echo "validasi salah";
}
?>
<?php
mysql_close();
?>