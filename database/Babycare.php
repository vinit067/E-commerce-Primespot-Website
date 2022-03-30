<?php

// Use to fetch product data
class babycare
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'sub_babycare'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($sub_babycare = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $sub_babycare;
        }

        return $resultArray;
    }

    // get Specialprices using categoryid
    public function getSpecialPrices($sub_id = null, $table= 'sub_babycare'){
        if (isset($sub_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE sub_id={$sub_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($babycare = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $package;
            }

            return $resultArray;
        }
    }

}
?>




