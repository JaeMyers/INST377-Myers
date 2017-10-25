<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}
</style>

<script>
function validateForm() {
    // you can write a code for validating your forms (if you want).
}
</script>

</head>
<body>

</head>
<body>


<?php 

// forms need to be generated here inside the PHP tag.
$server = "localhost";
$username = "root";
$password = "root";
$db = "sakila";

$firstname = "first_name";
$lastname = "last_name";
$email = "email";
$address = "address";
$city = "city";



//Creating Connection 
$conn = mysqli_connect($server, $username, $password, $db);

$sqlOutput= 'SELECT first_name, last_name, email,address, city
FROM customer
JOIN address 
ON address.address_id = customer.address_id
JOIN city 
ON city.city_id = address.city_id
WHERE last_name = "ANDREWS"
ORDER BY last_name;';

//Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}


function query_to_db($conn, $sqlOutput){
    $result = mysqli_query($conn,$sqlOutput);

    if ($result) {   
        echo "Your query was successful";
    } else {
        echo "Error: " . $sqlOutput . "<br>" . mysqli_error($conn);
    }

} 

$output =mysqli_query($conn, $sqlOutput);

if(mysqli_num_rows($output) >0){  
while($rows = mysqli_fetch_array($output)){  
echo "<form action='form_display.php' name ='outputTable' method='POST'>";
echo "<br>";
echo "First Name: <input type='text' name='firstname' value=$rows[$firstname]>";
echo "<br>";
echo "Last Name: <input type='text' name='lastname' value=$rows[$lastname]>";
echo "<br>";
echo "Email: <input type='email' name='email' value=$rows[$email]>";
echo "<br>";
echo "Address: <input type='text' name='address' value='$rows[$address]'";
echo "<br>";
echo "<br>";
echo "City: <input type='text' name='city' value=$rows[$city] >";
echo "<br>";

echo "<input type='submit' value='submit'>";
echo "</form>";
  }

} else { 
    echo "Zero Results";
}

mysqli_close($conn);


?>

</body>
</html>