<?php

// Use to fetch product data
class women
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'sub_women'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($sub_women = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $sub_women;
        }

        return $resultArray;
    }

    // get Specialprices using categoryid
    public function getSpecialPrices($sub_id = null, $table= 'sub_women'){
        if (isset($sub_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE sub_id={$sub_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($women = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $women;
            }

            return $resultArray;
        }
    }

}
?>




