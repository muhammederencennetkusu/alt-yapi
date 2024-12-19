<?php

namespace App\Catalog\Controller;

use App\Catalog\Model\BaseModel;
use System\Engine\Controller;

class BaseController extends Controller
{
    public function index(): void
    {
        $app =  new BaseModel();
        $users = $app->users();
        $this->data["users"] = $users;
        $this->view("catalog/index", $this->data);
    }






    
}

