<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
     <title> Add Course Record </title> 
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
$val= ($_GET["value"]);

$val_M = mysqli_real_escape_string($conn, $val);

$sql="SELECT id, uni_id, programme_name FROM programme_dbs WHERE uni_id='$val_M'";

$result= mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {

  	echo "<select name='programme_id'>";

 		while ($rows= mysqli_fetch_assoc($result)) {

		echo "<option value='".$rows["id"]."'>".$rows["programme_name"]."</option>";

	}

	echo "</select>";

} else {


}

?>

</body>
</html>