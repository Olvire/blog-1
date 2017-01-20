<?php

    class Specification {

    public static function checkSpecification(){

        $db = Db::getConnection();
        $sql = "select * from specification WHERE 1";
        $specificationList = array();
        $result = $db->query($sql);
        $i = 0;
        while ($row = $result->fetch()){

            $specificationList[$i]['id']  = $row['id'];
            $specificationList[$i]['title_specification']  = $row['title_specification'];
            $specificationList[$i]['content_specification']  = $row['content_specification'];
            $specificationList[$i]['icon_specification']  = $row['icon_specification'];
            $i++;
        }
        return $specificationList;
    }

    }