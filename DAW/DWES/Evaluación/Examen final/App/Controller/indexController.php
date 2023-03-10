<?php

namespace App\Controller;

use App\Controller\BaseController;

class IndexController extends BaseController
{
    public function IndexAction()
    {
        $data = array('message' => 'login');
        $this->renderHTML('../views/index_view.php', $data);
    }
}
