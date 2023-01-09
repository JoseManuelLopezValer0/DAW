<?php
// Definir espacio de nombres;
class BaseController
{
    public function renderHTML($fileName, $data = [])
    {
        include($fileName);
    }
}
