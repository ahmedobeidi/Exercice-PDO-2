<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <header>
        <h1>Patient Management System</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <!-- You can add more links here if needed -->
            </ul>
        </nav>
    </header>

    <main>
        <h2>Add New Patient</h2>
        <form action="../../handles/handle-create-patient.php" method="POST" class="form-container">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday">

            <label for="phone">Contact Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">

            <button type="submit">Submit</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Patient Management System</p>
    </footer>
</body>
</html>
