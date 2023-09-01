<?php

class voetballer extends BaseController
{
    private $voetballerModel;
    public function __construct()
    {
        $this->voetballerModel = $this->model('VoetballerModel');
    }

    public function index()
    {
        $result = $this->voetballerModel->getVoetballers();

        $rows = "";

        foreach($result as $voetballer) {
            $rows .= "<tr>
                        <td>$voetballer->Naam</td>
                        <td>$voetballer->Club</td>
                        <td>$voetballer->Leeftijd</td>
                        <td>$voetballer->Nationaliteit</td>
                        <td>$voetballer->Salaris</td>
                      <tr>";
        }

        $data = [
            'title' => 'Top 5 best betaalde voetballers ter wereld',
            'rows' => $rows
        ];

        $this->view('voetballer/index', $data);
    }
}