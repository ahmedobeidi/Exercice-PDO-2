<?php 
    require_once '../../handles/connect-db.php';

    try {
        $stmt = $pdo->query("SELECT * FROM `patients`");
        $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
?>