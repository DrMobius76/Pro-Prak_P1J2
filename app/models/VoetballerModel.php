<?php

class VoetballerModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVoetballers()
    {
        $sql = "SELECT  Naam
                       ,Club
                       ,Leeftijd
                       ,Nationaliteit
                       ,Salaris
                FROM   Voetballers";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}