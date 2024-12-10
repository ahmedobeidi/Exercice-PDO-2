<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>

    <header>
        <h1>Patient Management System</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="./add-patient.php">Add Patient</a></li>
                <li><a href="./show-all-patients.php">Show All</a></li>
                <!-- You can add more links here if needed -->
            </ul>
        </nav>
    </header>

    <div id="show">
        <?php $userData =  $_SESSION['user-data'][0]; ?>
        <h3> <?= $userData['lastname'] ?> </h3>    
        <h3> <?= $userData['firstname'] ?> </h3>    
        <h3> <?= $userData['birthdate'] ?> </h3>    
        <h3> <?= $userData['phone'] ?> </h3>    
        <h3> <?= $userData['mail'] ?> </h3>    
    </div>

    <footer>
        <p>&copy; 2024 Patient Management System</p>
    </footer>
</body>
</html>