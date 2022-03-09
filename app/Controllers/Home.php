<?php

namespace App\Controllers;
use App\Models\SurveyModel;

class Home extends BaseController
{
    public function index()
    {   
        return view('home');
    }

    public function submit() {
        $survey = new SurveyModel();

        $data = [
            'postcode' => $this->request->getVar('postcode'),
            'survey_choice' => $this->request->getVar('survey_choice'),
            'email' => $this->request->getVar('email'),
            'mobile_number' => $this->request->getVar('mobile_number'),
        ];

        $survey->save($data);
        echo json_encode(array('success' => true, 'message' => 'Successfully submitted!'));
    }
}
