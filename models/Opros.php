<?php

    class Opros{

    public static function getOprosList(){

        $db = Db::getConnection();

        $sql = "select * from opros WHERE 1";
        $oprosList = array();
        $result = $db->query($sql);
        $i = 0;
        while ($row = $result->fetch()){
            $oprosList[$i]['id'] = $row['id'];
            $oprosList[$i]['title_opros'] = $row['title_opros'];
            $oprosList[$i]['h1_opros'] = $row['h1_opros'];
            $oprosList[$i]['image_opros'] = $row['image_opros'];
            $oprosList[$i]['description_opros'] = $row['description_opros'];
            $oprosList[$i]['category_opros'] = $row['category_opros'];
            $oprosList[$i]['content_opros'] = $row['content_opros'];
            $i++;
        }
        return $oprosList;
    }

    public static function getOprosItemById($id){

        $db = Db::getConnection();
        $sql = "Select * from opros WHERE id =$id";
        $result = $db->query($sql);

        return $result->fetch();

    }

        public static function createItem($title_opros, $category_opros, $content_opros, $image_opros, $h1_opros, $description_opros, $status_opros ){
            $db = Db::getConnection();
            $sql = "Insert  into opros (title_opros, category_opros, content_opros, image_opros, h1_opros, description_opros, status_opros)
                    VALUES (:title_opros, :category_opros, :content_opros, :image_opros, :h1_opros, :description_opros, :status_opros)";


            $result = $db->prepare($sql);
            $result->bindParam(':title_opros', $title_opros, PDO::PARAM_STR);
            $result->bindParam(':category_opros', $category_opros, PDO::PARAM_STR);
            $result->bindParam(':content_opros', $content_opros, PDO::PARAM_STR);
            $result->bindParam(':image_opros', $image_opros, PDO::PARAM_STR);
            $result->bindParam(':h1_opros', $h1_opros, PDO::PARAM_STR);
            $result->bindParam(':description_opros', $description_opros, PDO::PARAM_STR);
            $result->bindParam(':status_opros', $status_opros, PDO::PARAM_STR);
            return $result->execute();
        }

        public static function deleteOpros($id){
            $db = Db::getConnection();
            $sql = "delete from opros WHERE id =".$id;
            return $result = $db->query($sql);
        }

        public static function saveItem($id, $title_opros, $category_opros, $content_opros, $h1_opros, $description_opros, $status_opros ){
            $db = Db::getConnection();
            $sql = "Update opros Set title_opros = :title_opros, category_opros = :category_opros, content_opros =  :content_opros,  h1_opros = :h1_opros, description_opros = :description_opros, status_opros =  :status_opros WHERE id=:id";


            $result = $db->prepare($sql);
            $result->bindParam(':title_opros', $title_opros, PDO::PARAM_STR);
            $result->bindParam(':category_opros', $category_opros, PDO::PARAM_STR);
            $result->bindParam(':content_opros', $content_opros, PDO::PARAM_STR);
            $result->bindParam(':h1_opros', $h1_opros, PDO::PARAM_STR);
            $result->bindParam(':description_opros', $description_opros, PDO::PARAM_STR);
            $result->bindParam(':status_opros', $status_opros, PDO::PARAM_STR);
            $result->bindParam(':id', $id, PDO::PARAM_STR);

            return $result->execute();
        }

        public static function editImage($id, $image){
            $db = Db::getConnection();
            $sql = "Update opros Set image_opros = :image WHERE id=:id";
            $result = $db->prepare($sql);
            $result->bindParam(':image', $image, PDO::PARAM_STR);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            return $result->execute();

        }

        public static function OprosUrl($id){
            $db = Db::getConnection();
            $sql = "Select id from opros WHERE id = $id";
            $result =$db->query($sql);
            return $result->fetch();
        }

    }