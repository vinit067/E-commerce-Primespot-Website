<?php

// Use to fetch product data
class Special
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'special_prices'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($ctg = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $ctg;
        }

        return $resultArray;
    }

    // get Specialprices using ctg id
    public function getSpecialPrices($ctg_id = null, $table= 'special_prices'){
        if (isset($ctg_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE ctg_id={$ctg_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($ctg = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $ctg;
            }

            return $resultArray;
        }
    }

}
?>