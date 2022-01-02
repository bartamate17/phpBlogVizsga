<?php

class articleModel extends CI_Model
{
    public function getDateArticleCount()
    {
        $sql = "SELECT YEAR(megjelenesdatuma)AS year,
        MONTH(megjelenesdatuma) AS month, 
        COUNT(*) AS count 
        FROM bejegyzes GROUP BY year, 
        month ORDER BY year, month DESC";

        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }

    public function getArticles($count = 3)
    {
        $count = (int)$count;

        $sql = "SELECT bejegyzes.id,cim,rovidtartalom,tartalom, image, megjelenesdatuma,
        YEAR(megjelenesdatuma) as ev,
        MONTH(megjelenesdatuma) as honap,
        DAY(megjelenesdatuma) as nap,
        vezeteknev, utonev, email,
        szerzo_id,temakor_id
        FROM bejegyzes
        LEFT JOIN szerzo ON(bejegyzes.szerzo_id = szerzo.id)
        ORDER BY megjelenesdatuma DESC LIMIT " . $count;

        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }

    public function getSideArticles($count = 14)
    {
        $count = (int)$count;

        $sql = "SELECT id,cim,rovidtartalom,tartalom, image, megjelenesdatuma,szerzo_id,temakor_id 
        FROM bejegyzes
        ORDER BY megjelenesdatuma DESC LIMIT " . $count;

        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }

    public function getArticlesByYearMonth($year, $month)
    {
        //(int) védelem, ha nem integer lesz az érték 0-át ad vissza értéknek
        $year = (int) $year;
        $month = (int) $month;

        $sql = "SELECT
        bejegyzes.id,
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
        WHERE
        YEAR ( megjelenesdatuma ) = '" . $year . "'  
        AND MONTH ( megjelenesdatuma ) = '" . $month . "' 
        ORDER BY megjelenesdatuma DESC";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getArticlesByAuthor($id, $count = 5)
    {
        $id = (int)$id;

        //(int) védelem, ha nem integer lesz az érték 0-át ad vissza értéknek

        $sql = "SELECT
        bejegyzes.id,
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
        WHERE szerzo.id = '" . $id . "'
        ORDER BY megjelenesdatuma DESC LIMIT " . $count;

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function ArticleRead($id)
    {
        $id = (int)$id;

        $sql = "SELECT
        bejegyzes.id,
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
        WHERE bejegyzes.id ='" . $id . "'";

        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function getAuthors()
    {
        $sql = "SELECT vezeteknev, utonev, szerzo.id as azonosito  FROM szerzo";

        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }

    public function getInstagramPictures()
    {
        $sql = "SELECT link, alt FROM instagram";

        $query = $this->db->query($sql);
        //tömbben adja vissza a query-t
        return $query->result_array();
    }
}
