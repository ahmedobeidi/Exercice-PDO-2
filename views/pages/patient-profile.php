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
    <script defer src="../../JS/handle-edit-patient-profile.js"></script>
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

    <div id="showDiv">
        <?php $userData =  $_SESSION['user-data'][0]; ?>
        
        <h3> <?= $userData['lastname'] ?> </h3>    
        <h3> <?= $userData['firstname'] ?> </h3>    
        <h3> <?= $userData['birthdate'] ?> </h3>    
        <h3> <?= $userData['phone'] ?> </h3>    
        <h3> <?= $userData['mail'] ?> </h3> 
        <a class="editButton" id="editButton">Edit</a>
    </div>

    <div id="editDiv" style="display: none">
        <form action="../../handles/handle-update-patient.php" method="POST" class="form-container">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" value="<?= $userData['lastname'] ?>">

            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" value="<?= $userData['firstname'] ?>">

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" value="<?= $userData['birthdate'] ?>">

            <label for="phone">Contact Number:</label>
            <input type="text" id="phone" name="phone" value="<?= $userData['phone'] ?>">

            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email" value="<?= $userData['mail'] ?>">

            <button type="submit">Update</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Patient Management System</p>
    </footer>
</body>
</html>