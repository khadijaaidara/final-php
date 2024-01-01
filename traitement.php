<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    switch ($action) {
        case 'Louer':
            header('Location: louer.php');
            break;
        case 'Acheter':
            header('Location: acheter.php');
            break;
        case 'Vendre':
            header('Location: vendre.php');
            break;
        default:
            // Redirection par défaut si nécessaire
            header('Location: accueil.php');
            break;
    }
}
?>
