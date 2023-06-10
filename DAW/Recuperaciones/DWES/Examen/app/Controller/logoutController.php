<?php
class logoutController
{
    public function __logout()
    {
        session_start();
        session_destroy();
        header("Location: ../../index.php");
    }
    

    public function __construct()
    {
        $this->__logout();
    }

}

new logoutController();

?>
