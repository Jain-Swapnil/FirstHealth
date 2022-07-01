<!DOCTYPE html>
<html>
<head>
    <title>PATIENT QUERY FORM</title>

<style>

	body 
		{
            background-image:url("1282794.jpg") ;
            background-size:cover;
            font-family: Arial;
            margin-left:30%;
            margin-right:30%;
            border: 1px solid #000000;
            margin-bottom: 5px;
            padding: 20px 15px 20px 15px;
        }
	
    input[type=text], input[type=password], input[type=date], select
    {   width: 100%;
		padding: 5px 10px;
		margin: 5px 0;
		display: inline-block;
		border: 1px solid #D9D9D9;
		box-sizing: border-box;
		border-radius:5px;
		font-family:Arial;
        border: 2px solid blue;
  border-radius: 4px;
    }
    h1{
        background-color:#000000;
        color: white;
    }
	hr
    {
        border: 1px solid #e6e6e6;
        margin-bottom: 5px;
    }
	.registerbutton
    {
        background-color: #2a79d3;
        color: white;
        padding: 15px 20px;
        margin: 10px 0px;
        border: none;
        cursor: pointer;
        width: 100%;
        text:bold;
    }
	p
    {
        text-align:right;
    }
</style>

<?php
$user = 'root';
$pass = '';
$db = 'logiccoders';
$conn = mysqli_connect('localhost', $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
            }
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['symptoms']) && isset($_POST['description']) ):
{
$name = $_POST['name'];
$email = $_POST['email'];
$symptoms = $_POST['symptoms'];
$description = $_POST['description'];
}
$sql = "INSERT INTO patient_query(name, email, symptoms, description)
VALUES ('$name', '$email', '$symptoms', '$description');";
if (mysqli_query($conn, $sql)) {
echo "<b>Query Submitted Sucessfully!</b><br><b>Kindly wait for Doctor's Reply</b><br>";

} else {
echo "Error creating table: " .mysqli_error($conn);
}
mysqli_close($conn);
endif;
?>


</head>

<body>
	<center>
	<form action="Patient_Form.php" method="post" class="form">
		<u><h1 style="font-type:arial">Descibe Your Symptoms </h1></u>
        
	</center>
	<a href="index.html">Click Here to go to Home Page</a><br><br>
		<label for="name"><b>Name</b></label>
		<input type="text" placeholder="Enter Your Name" id="name" name="name" required><br>
		
		<label for="select-choice"><b>Gender</b></label>
        <select name="select-choice" id="select-choice" required>
        <option value="0" selected disabled>Select Your Gender</option>
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
        <option value="other">OTHER</option>
        </select>

		<label for="number"><b>Mobile Number</b></label>
		<input type="text" pattern="[1-9][0-9]{9}" placeholder="Enter Your Contact No." name="number" required><br>
		
		<label for="email"><b>Email ID</b></label> 
		<input type="text" placeholder="Enter Your E-mail ID" name="email" required><br>

        <lable for="symptoms"><b>Symptoms</b></lable>
        <input type="text" placeholder="Enter Symptoms" name="symptoms" style="height:60px"><br>

        <lable for="description"><b>Description</b></lable>
        <input type="text" placeholder="Enter Description" name="description" style="height:100px"><br>
        

        <button type="submit" class="registerbutton">Submit</button>
		
	</form>


</body>
</html>