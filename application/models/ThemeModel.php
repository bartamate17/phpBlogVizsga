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

    public function getThemeIdRead($id)
    {

        $sql = "SELECT
        bejegyzes.id,
        szerzo.id as szerzoid,
        vezeteknev,
        utonev,
        cim,
        rovidtartalom,
        tartalom,
        image,
        megjelenesdatuma,
        YEAR(megjelenesdatuma) AS ev,
        MONTH(megjelenesdatuma) AS honap,
        DAY(megjelenesdatuma) AS nap,
        szerzo_id,
        temakor_id,
        vezeteknev,
        utonev,
        email
        FROM
        bejegyzes
        LEFT JOIN szerzo ON(bejegyzes.szerzo_id = szerzo.id)
        WHERE temakor_id = '" . $id . "'
        ORDER BY megjelenesdatuma DESC";

        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }
}
