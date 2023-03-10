<?php
namespace App\Controller;

class BaseController
{
    public function renderHTML($fileName, $data = [])
    {
        include($fileName);
    }
}
