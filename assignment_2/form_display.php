<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	tr:first-child 
	{ background: red;

	 }

	th
	{
		font-family: sans-serif;
		font-style: italic;
		background-color:pink;
		color:black;
}
	td{  
	background-color: powderblue;
  text-align:center;
}


</style>


</head>
<body>


<?php 
// The code that you recieve input data from the form goes to here.

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];



echo "<br>";
echo "<br>";
echo "<br>";
echo"<table width='1000' border='1'>"; 
echo"<tr>";
echo "<th style='background-color:00FF00;'>" . "Title". "</th>";
echo "<td>" . "Value" . "</td>";
echo "<td>" . "Validations" . "</td>";
echo"<tr>";
echo "<th>" . "First Name" . "</th>";
echo "<td>" . $firstname. "</td>";
echo "<td>" . "exist" . "</td>";
echo"<tr>";
echo "<th>" . "Last Name" . "</th>";
echo "<td>" . $lastname. "</td>";
echo "<td>" . "new" . "</td>";
echo"<tr>";
echo "<th>" . "Email" . "</th>";
echo "<td>" . $email. "</td>";
echo "<td>" . "exist" . "</td>";
echo"<tr>";
echo "<th>" . "Address" . "</th>";
echo "<td>" . $address."</td>";
echo "<td>" . "new" . "</td>";
echo"<tr>";
echo "<th>" . "City" . "</th>";
echo "<td>" . $city. "</td>";
echo "<td>" . "exist" . "</td>";


// Could not figure out how to implement the validation aspect of the assignment.
// My thoughts were to create an if statement that tests any information put into the form
// against that information in the database. If the info is = that info in the database, 
// it would return exist. Else, it would return new
?>



</body>
</html>