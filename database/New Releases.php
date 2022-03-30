<?php

// Use to fetch product data
class Releases
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'new_releases'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($new = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $new;
        }

        return $resultArray;
    }

    // get Specialprices using ctg id
    public function getNewReleases($new_id = null, $table= 'new_releases'){
        if (isset($new_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE new_id={$new_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($new = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $new;
            }

            return $resultArray;
        }
    }

}
?>