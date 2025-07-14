<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
     <title> Mapping Helper </title> 
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <!-- This is for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Roboto&display=swap" rel="stylesheet">
    <!-- font awesome 4 cdn -->
    <link rel="icon" href="Images/unikl_logo.png">
</head>
<body>

<?php
/*---------------- helper ----------------*/

$conn= mysqli_connect("localhost", "root", "","credit_transfer_system_dbs");

if (!$conn) {
	exit("Sorry, Connection error..");
} else {
	//echo "Connection Ok";
}

//previous
if(isset($_GET["value"])){
	$val= ($_GET["value"]);
	$val_M = mysqli_real_escape_string($conn, $val);
	$sql="SELECT id, uni_id, programme_name FROM programme_dbs WHERE uni_id='$val_M'";

	$result= mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)>0) {
		echo "<select name='programme_id_c'>";

			while ($rows= mysqli_fetch_assoc($result)) {

			echo "<option value='".$rows["id"]."'>".$rows["programme_name"]."</option>";
			}
		echo "</select>";
	}
}


//1
if(isset($_GET["courseCode"])){
	$val1= ($_GET["courseCode"]);
	$val_M1 = mysqli_real_escape_string($conn, $val1);
	$sql1="SELECT id, uni_id, programme_id, course_code, course_name, credit_hours FROM course_dbs WHERE course_code='$val_M1'";

	$result1= mysqli_query($conn, $sql1);

	if (mysqli_num_rows($result1)>0) {
		$rows1= mysqli_fetch_assoc($result1);
		//course name
		// echo "<select name='course_name_id'>";

		// 	while ($rows1= mysqli_fetch_assoc($result1)) {

		// 	echo "<option value='".$rows1["id"]."'>".$rows1["course_name"]."</option>";
		// 	}
		// echo "</select>";

		//credit hours
		// echo "<select name='credit_hours_id'>";

		// 	while ($rows1= mysqli_fetch_assoc($result1)) {

		// 	echo "<option value='".$rows1["id"]."'>".$rows1["credit_hours"]."</option>";
		// 	}
		// echo "</select>";
		?>

		<label class="form-label">COURSE NAME :</label>
		<input type="text" class="form-control mb-3" name="course_name_id" value="<?php echo $rows1["course_name"];?>" readonly>

		<label class="form-label">CREADIT HOURS :</label>
		<input type="text" class="form-control mb-3" name="credit_hours_id" value="<?php echo $rows1["credit_hours"];?>" readonly>

		<?php

	}
}


//current
if(isset($_GET["value_c"])){
	$val_c= ($_GET["value_c"]);
	$val_M_c = mysqli_real_escape_string($conn, $val_c);
	$sql_c="SELECT id, uni_id, programme_name FROM programme_dbs WHERE uni_id='$val_M_c'";

	$result_c= mysqli_query($conn, $sql_c);

	if (mysqli_num_rows($result_c)>0) {
		echo "<select name='programme_id_c'>";

			while ($rows_c= mysqli_fetch_assoc($result_c)) {

			echo "<option value='".$rows_c["id"]."'>".$rows_c["programme_name"]."</option>";
			}
		echo "</select>";
	}
}


//2
if(isset($_GET["courseCode_c"])){
	$val2= ($_GET["courseCode_c"]);
	$val_M2 = mysqli_real_escape_string($conn, $val2);
	$sql2="SELECT id, uni_id, programme_id, course_code, course_name, credit_hours FROM course_dbs WHERE course_code='$val_M2'";

	$result2= mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result2)>0) {
		$rows2= mysqli_fetch_assoc($result2);
		// //course name
		// echo "<select name='course_name_id_c'>";

		// 	while ($rows2= mysqli_fetch_assoc($result2)) {

		// 	echo "<option value='".$rows2["id"]."'>".$rows2["course_name"]."</option>";
		// 	}
		// echo "</select>";

		// //credit hours
		// echo "<select name='credit_hours_id_c'>";

		// 	while ($rows2= mysqli_fetch_assoc($result2)) {

		// 	echo "<option value='".$rows2["id"]."'>".$rows2["credit_hours"]."</option>";
		// 	}
		// echo "</select>";
		?>
		<label class="form-label">COURSE NAME :</label>
		<input type="text" class="form-control mb-3" name="course_name_id_c" value="<?php echo $rows2["course_name"];?>" readonly>

		<label class="form-label">CREADIT HOURS :</label>
		<input type="text" class="form-control mb-3" name="credit_hours_id_c" value="<?php echo $rows2["credit_hours"];?>" readonly>

		<?php

	}
}

?>

</body>
</html>