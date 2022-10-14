
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>

<form action="login.php" method="post">
    <input type="text" name="name" placeholder="Enter your name"><br>
    <input type="email" name="email" placeholder="Enter your email"><br>
    <input type="Date" name="date" placeholder="Enter your date"><br>
    <input type="radio" id="html" name="gender" value="male">
    <label for="html">male</label><br>
    <input type="radio" id="css" name="gender" value="female">
    <label for="css">female</label><br> 
    <input type="text" name="country" placeholder="Enter your Country">
    <input type="submit" name="submit" value="submit" >

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
        echo($email);
        echo $date;
        echo $gender;
        echo $country;

    }
}
?>

</body>
</html>
