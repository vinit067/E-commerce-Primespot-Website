<?php

// Use to fetch product data
class decor
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'sub_decor'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($decore = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $decore;
        }

        return $resultArray;
    }

    // get Specialprices using ctg id
    public function getSpecialPrices($sub_id = null, $table= 'sub_decor'){
        if (isset($sub_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE sub_id={$sub_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($decore = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $decore;
            }

            return $resultArray;
        }
    }

}
?>