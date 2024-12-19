<?php

namespace App\Admin\Controller;

use App\Admin\Model\BaseModel;
use System\Engine\Controller;

class BaseController extends Controller
{
    
    public function index(): void
    {
        $this->data["title"] = 'Admin Sayfası...';

        $app =  new BaseModel();
        $users = $app->users();
        $this->data["users"] = $users;

        $this->view("admin/index", $this->data);
    }


    public function userAdd():void{

        $this->jsonResponse("success",);
    }
}
