<?php
    require_once 'load.php';

    function getUser($conn) {
        $getUser = 'SELECT * FROM tbl_users';
        $runQuery = $conn->query($getUser);

        $result = array();

        while($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
// push each row of data into our arry to make it easy to iterate over
            $result[] = $row;
        }

        return $result;
    }

?>