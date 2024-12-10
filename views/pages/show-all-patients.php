<?php 
    require_once '../../handles/handle-show-all-patients.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Patients</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <header>
        <h1>Patient Management System</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="./add-patient.php">Add Patient</a></li>
                <!-- You can add more links here if needed -->
            </ul>
        </nav>
    </header>

    <main>
        <h2>ALL Patients</h2>
        <?php 
            if (isset($patients)) {
                foreach($patients as $patient) { ?>        
                <div id="show">
                    <form action="../../handles/handle-patient-profile.php" method="post">
                        <h3><?= $patient['lastname']; ?></h3>
                        <input type="hidden" name="idPatient" value="<?= $patient['id'] ?>">
                        <input type="submit" value="See More">
                    </form>
                </div>
            <?php }
            }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Patient Management System</p>
    </footer>
</body>
</html>
