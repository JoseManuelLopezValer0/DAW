<?php
// Punto de entrada de la aplicación


// inicia el login
session_start();



// Cargar el controlador adecuado según la acción solicitada
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'login':
            require_once 'app/controllers/LoginController.php';
            $controller = new LoginController();
            $controller->login();
            break;
        case 'listAppointments':
            require_once 'app/controllers/AppointmentController.php';
            $controller = new AppointmentController();
            $controller->listAppointments();
            break;
        case 'deleteAppointment':
            require_once 'app/controllers/AppointmentController.php';
            $controller = new AppointmentController();
            $controller->deleteAppointment();
            break;
        case 'newAppointment':
            require_once 'app/controllers/AppointmentController.php';
            $controller = new AppointmentController();
            $controller->newAppointment();
            break;
        case 'listAvailableAppointments':
            require_once 'app/controllers/DoctorController.php';
            $controller = new DoctorController();
            $controller->listAvailableAppointments();
            break;
        default:
            // Acción no válida, redireccionar a una página de error o página principal
            break;
    }
}

// Si no se ha iniciado sesión, redireccionar a la página de login
if (!isset($_SESSION['username'])) {
    require_once 'app\views\login.php';
    exit;
}
?>