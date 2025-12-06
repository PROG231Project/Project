<?php
$conn = new mysqli("localhost", "root", "", "mydb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receive form data
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];
$gender   = $_POST['gender'];

// Insert data into table
$sql = "INSERT INTO users (name, email, password, gender)
        VALUES ('$name', '$email', '$password', '$gender')";

if ($conn->query($sql) === TRUE) {
    // success message will be handled in HTML below
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Account Created</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signin">
        <div class="account-card">
            <h2>Account Created Successfully</h2>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Password:</strong> <?php echo htmlspecialchars($password); ?></p>
            <p><strong>Gender:</strong> <?php echo ucfirst(htmlspecialchars($gender)); ?></p>
        </div>
    </div>
</body>
</html>


