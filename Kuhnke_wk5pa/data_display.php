<?php
session_start();

// Get the name stored in the cookie
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";

// Get the date of birth stored in the session
$dob = isset($_SESSION['dob']) ? $_SESSION['dob'] : "";
?>

<html>
<head>
    <title>Your Name Wk 5 Performance Assessment</title>
</head>

<body>

    <h2>Stored Information</h2>

    <p>
        Name:
        <?php echo htmlspecialchars($name); ?>
    </p>

    <p>
        Date of Birth:
        <?php echo htmlspecialchars($dob); ?>
    </p>

    <br>

    <a href="data_entry.php">Back to Data Entry Page</a>

</body>
</html>