<?php

namespace App\Controllers;
use App\Models\SurveyModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {   
        $session = session();
        $data['sessData'] = $session->get();

        $survey = new SurveyModel();
        $data['surveys'] = $survey->countAllResults();

        $users = new UserModel();
        $data['users'] = $users->countAllResults();

        return $this->loadView('dashboard', $data); 
    }

    public function member() {
        $session = session();
        $data['sessData'] = $session->get();

        return $this->loadView('member', $data);
    }
  
}
