<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Login;


class LoginsController extends AControllerBase
{
    public function index(): Response
    {
        $logins = Login::getAll();
        return $this->html($logins);
    }

    public function overHeslo() : bool
    {
        $id = $this->request()->getValue('id');
        $pass = $this->request()->getValue('p_meno');
        $meno = $this->request()->getValue('p_heslo');
        if ($pass = $meno) {
            return true;
        }
        return false;
    }


}