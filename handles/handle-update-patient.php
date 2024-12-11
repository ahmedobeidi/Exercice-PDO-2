<?php 
    require_once '../handles/connect-db.php';

    session_start();
    $patientID = $_SESSION['user-data'][0]['id'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];    

    try {
        $stmt = $pdo->prepare("UPDATE `patients` 
        SET patients.firstname = :firstname, patients.lastname = :lastname, patients.birthDate = :birthday, 
        patients.phone = :phone, patients.mail = :email
        WHERE id = :id");

        $stmt->execute([
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':birthday' => $birthday,
            ':phone' => $phone,
            ':email' => $email,
            ':id' => $patientID,
        ]);

        $patient = $stmt->fetchAll(PDO::FETCH_ASSOC);

        header('Location: ../views/pages/show-all-patients.php?success');
        return;

    } catch (PDOException $error) {
        echo $error;
    }