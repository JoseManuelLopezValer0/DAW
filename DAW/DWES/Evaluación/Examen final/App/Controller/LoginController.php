<?php

namespace App\Controller;

use App\Controller\BaseController;

class LoginController extends BaseController
{
    public function loginAction()
    {
        $this->renderHTML('login.php');
    }
}
