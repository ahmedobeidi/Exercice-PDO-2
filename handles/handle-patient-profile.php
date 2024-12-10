<?php 
    if ($_SERVER['REQUEST_METHOD'] !== "POST") { 
        header('Location: ../views/pages/show-all-patients.php');
    }

    require_once '../handles/connect-db.php';

    try {
        $idPatient = $_POST['idPatient'];
        $stmt = $pdo->query("SELECT * FROM `patients` WHERE id = {$idPatient}");

        $patient = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();

        $_SESSION['user-data'] = $patient;

        header('Location: ../views/pages/patient-profile.php?');
        return;

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
    
?>