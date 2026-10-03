<?php
session_start();

// Store the submitted information
if (isset($_POST['submit'])) {

    // Store the name in a cookie for one hour
    setcookie("name", $_POST['name'], time() + 3600, "/");

    // Update the cookie value for the current page
    $_COOKIE['name'] = $_POST['name'];

    // Store the date of birth in the session
    $_SESSION['dob'] = $_POST['dob'];
}

// Get the stored name from the cookie
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";

// Get the stored date of birth from the session
$dob = isset($_SESSION['dob']) ? $_SESSION['dob'] : "";
?>

<html>
<head>
    <title>Your Name Wk 5 Performance Assessment</title>
</head>

<body>

    <h2>Store your name in a cookie and birthdate in the Session</h2>

    <form method="POST">
        <p>
            Name:
            <input type="text" name="name"
                   value="<?php echo htmlspecialchars($name); ?>">
        </p>

        <p>
            Date of Birth:
            <input type="text" name="dob"
                   value="<?php echo htmlspecialchars($dob); ?>">
        </p>

        <input type="submit" name="submit" value="Submit">
    </form>

    <br>

    <a href="data_display.php">Display Stored Information</a>

</body>
</html>