<?php

class ThemeModel extends CI_Model
{

    public function getTheme()
    {

        $sql = "SELECT id, megnevezes, leiras FROM temakor";
        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }

    
}
