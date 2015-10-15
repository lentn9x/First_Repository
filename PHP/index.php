<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$favo = "red";
		switch ($favo) {
			case 'red':
				 echo "Your favo color is red";
				break;
			
			default:
				 echo "or not";
				break;
		}
		echo "<br>";
		$color = array("red","green","blue","yellow");
		foreach ($color as $value) {
			echo "$value <br>";
		}
		function  writeMsg(){
			echo "Hello World! <br>";
		}
		writeMsg();
		function set($height = 50){
			echo "Height is : $height <br>";
		}
		set(350);
		$color = array("red","blue","green","yellow","gray");
		foreach ($color as $key => $value) {
			echo "$value <br>";
		}
		echo count($color);
		$age = array('peter' => 35 , 'ben' => 37 , 'joe' => 43 );
		foreach ($age as $key => $key_value) {
			echo "Name = ".$key." , Value = ".$key_value;
			echo "<br>";
		}
		$numbers = array(4,5,2,6,2,11);
		sort($numbers);
		foreach ($numbers as $key => $value) {
			echo "$value <br>";
		}
	?>
	<form method="post" action="<?php echo $_SERVER['PHP_SEFT'];?>">
			Name : <input type="text" name="fname">
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$name = $_POST['fname'];
				if (empty($name)){
					echo "Name is empty";
				} else {
					echo $name;
				}
			}
		?>
	<hr>
	<?php
		$name = $mail = $gender = $comment = $website = "";
		if ($_SERVER["REQUEST_METHOD"] == post){
			$name = test_input($_POST["name"]);
			$mail = test_input($_POST["mail"]);
			$website = test_input($_POST["website"]);
			$comment = test_input($_POST["comment"]);
			$gender = test_input($_POST["gender"]);
		}
		function  test_input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
		Name : <input type="text" name="name"><br>
		E-mail : <input type="text" name="mail"><br>
		website : <input type="text" name="website"><br>
		comment : <textarea type="comment" rows="5" cols="40">
		</textarea><br>
		Gender : 
		<input type="radio" name="gender" value="famale">Female
		<input type="radio" name="gender" value="male">Male
		<br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		echo "<h2>Your Input:</h2>";
		echo $name."<br>";
		echo $mail."<br>";
		echo $website."<br>";
		echo $comment."<br>";
		echo $gender."<br>";
	?>
</body>
</html>