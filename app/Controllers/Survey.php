<?php

namespace App\Controllers;
use App\Models\SurveyModel;

class Survey extends BaseController
{
    public function index()
    {
        $session = session();
        $data['sessData'] = $session->get();

        return $this->loadView('survey', $data);
    }
    public function get_survey() {
        $survey = new SurveyModel();
        $data['list'] = $survey->findAll();

        echo json_encode($data);
    }
    public function remove_survey($survey_id = null) {
        $survey = new SurveyModel();

        $survey->delete(['survey_id' => $survey_id]);

        echo json_encode(array('success' => true, 'message' => 'Successfully deleted!'));
    }
}
