<?php

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('location: ../index.php?error=1');
        return;
    }

    if (!isset($_POST['firstname'], $_POST['lastname'])) {
        header('location: ../index.php?error=2');
        return;
    }

    if (
        empty($_POST['firstname']) ||
        empty($_POST['lastname'])
    ) {
        header('location: ../index.php?error=3');
        return;
    }

    $firstName = htmlspecialchars(trim($_POST['firstname']));
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $birthday = htmlspecialchars(trim($_POST['birthday']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $mail = htmlspecialchars(trim($_POST['email']));

    if (
        strlen($firstName) > 50 ||
        strlen($lastName) > 50
    ) {
        header('location: ../index.php?error=4');
        return;
    }

    require_once './connect-db.php';

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    try {
        $stmt = $pdo->prepare("INSERT INTO `patients` (lastname, firstname, birthdate, phone, mail) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)");
        $patients = $stmt->execute([
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':birthdate' => $birthday,
            ':phone' => $phone,
            ':mail' => $email,
        ]);

        header("Location: ../index.php?success");

    } catch (PDOException $error) {
        echo $error->getMessage();
    }

?>