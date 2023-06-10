<?php
class LoginController {
    public function login() {
        // Lógica para procesar el formulario de acceso

        

        // Verificar las credenciales, el captcha y determinar el perfil del usuario

        // Redireccionar al controlador correspondiente según el perfil
        header('Location: index.php?action=listAppointments');
        exit;
    }
}
?>
