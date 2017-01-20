<?php

 class Admin{

     const SHOW_BY_DEFAULT = 2;

    public static function UpdateAboutMe($site_name, $description_site, $h1_site, $content_site){

        $db = Db::getConnection();

        $sql = 'Update aboutme set site_name =:site_name, description =:description_site, h1 = :h1_site, contents = :content_site';

        $result =$db->prepare($sql);
        $result->bindParam(':site_name', $site_name, PDO::PARAM_STR);
        $result->bindParam(':description_site', $description_site, PDO::PARAM_STR);
        $result->bindParam(':h1_site', $h1_site, PDO::PARAM_STR);
        $result->bindParam(':content_site', $content_site, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function EditService($id){

        $db = Db::getConnection();

        $sql = "select * FROM `specification` WHERE id=$id";

        $result = $db->query($sql);

        return $result->fetch();

    }

    public static function SpecificationForm($title_specification, $content_specification, $id){

        $db = Db::getConnection();

        $sql = "Update specification Set title_specification = :title_specification, content_specification=:content_specification WHERE id= :id";

        $result = $db->prepare($sql);
        $result->bindParam(':title_specification', $title_specification, PDO::PARAM_STR);
        $result->bindParam(':content_specification', $content_specification, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();

    }

    public static function getNewsList($page){

        $db = Db::getConnection();
        $page = intval($page);
        $offset = ($page -1) * self::SHOW_BY_DEFAULT;

        $sql ="Select * from blog where 1 ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET ".$offset;

        $newsList = array();

        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['alias'] = $row['alias'];
            $newsList[$i]['image'] = $row['image'];
            $newsList[$i]['title_Item'] = $row['title_Item'];
            $newsList[$i]['h2_Item'] = $row['h2_Item'];
            $newsList[$i]['content_Item'] = $row['content_Item'];
            $i++;
        }

        return $newsList;
    }


    public static function getTotalNews(){

        $db = Db::getConnection();

        $sql = "Select count(id) as count from blog WHERE 1";
        $result = $db->query($sql);

        $row = $result->fetch();

        return $row['count'];

    }

     public static function getOprosList($page){

         $db = Db::getConnection();
         $page = intval($page);
         $offset = ($page -1) * self::SHOW_BY_DEFAULT;

         $sql ="Select * from opros where 1 ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET ".$offset;

         $oprosList = array();

         $result = $db->query($sql);

         $i = 0;
         while ($row = $result->fetch()){
             $oprosList[$i]['id'] = $row['id'];
             $oprosList[$i]['h1_opros'] = $row['h1_opros'];
             $oprosList[$i]['category_opros'] = $row['category_opros'];
             $i++;
         }

         return $oprosList;
     }

     public static function getMessageList($page){

         $db = Db::getConnection();
         $page = intval($page);
         $offset = ($page -1) * self::SHOW_BY_DEFAULT;

         $sql ="Select * from contacts where 1 ORDER BY id DESC LIMIT ".self::SHOW_BY_DEFAULT. " OFFSET ".$offset;
         $messageList = array();

         $result = $db->query($sql);

         $i = 0;
         while ($row = $result->fetch()){
             $messageList[$i]['id'] = $row['id'];
             $messageList[$i]['name_contacts'] = $row['name_contacts'];
             $messageList[$i]['email'] = $row['email'];
             $messageList[$i]['phone'] = $row['phone'];
             $messageList[$i]['message'] = $row['message'];
             $messageList[$i]['oprosType'] = $row['oprosType'];
             $messageList[$i]['oprosName'] = $row['oprosName'];
             $messageList[$i]['oprosTemperature'] = $row['oprosTemperature'];
             $messageList[$i]['oprosPressure'] = $row['oprosPressure'];
             $messageList[$i]['date'] = $row['date'];
             $i++;
         }
         return $messageList;
     }


     public static function getTotalOpros(){

         $db = Db::getConnection();

         $sql = "Select count(id) as count from opros WHERE 1";
         $result = $db->query($sql);

         $row = $result->fetch();

         return $row['count'];

     }

     public static function getTotalMessage(){

         $db = Db::getConnection();

         $sql = "Select count(id) as count from contacts WHERE 1";
         $result = $db->query($sql);

         $row = $result->fetch();

         return $row['count'];

     }

     public static function getSlideList(){
         $db = Db::getConnection();

         $sql = "Select * from slide WHERE 1";

         $result =$db->query($sql);

         $slideList = array();

         $i = 0;
         while ($row = $result->fetch()){
             $slideList[$i]['id'] = $row['id'];
             $slideList[$i]['title_slide'] = $row['title_slide'];
             $slideList[$i]['description_slide'] = $row['description_slide'];
             $slideList[$i]['image_first'] = $row['image_first'];
             $slideList[$i]['href'] = $row['href'];
             $slideList[$i]['status'] = $row['status'];
             $i++;
         }
         return $slideList;
     }

     public static function getSlideById($id){

         $db = Db::getConnection();

         $sql = "Select * from slide WHERE id = $id";

         $result = $db->query($sql);

         return $result->fetch();

     }

     public static function createSlide($title_slide, $description_slide, $image_first, $href){
         $db = Db::getConnection();
         $sql = "Insert  into slide (title_slide, description_slide, image_first, href)
                    VALUES (:title_slide, :description_slide, :image_first, :href)";


         $result = $db->prepare($sql);
         $result->bindParam(':title_slide', $title_slide, PDO::PARAM_STR);
         $result->bindParam(':description_slide', $description_slide, PDO::PARAM_STR);
         $result->bindParam(':href', $href, PDO::PARAM_STR);
         $result->bindParam(':image_first', $image_first, PDO::PARAM_STR);
         return $result->execute();
     }
     public static function saveSlide($id, $title_slide, $description_slide, $href){
         $db = Db::getConnection();
         $sql = "Update slide Set title_slide = :title_slide, description_slide = :description_slide, href = :href WHERE id=:id";


         $result = $db->prepare($sql);
         $result->bindParam(':title_slide', $title_slide, PDO::PARAM_STR);
         $result->bindParam(':description_slide', $description_slide, PDO::PARAM_STR);
         $result->bindParam(':href', $href, PDO::PARAM_STR);
         $result->bindParam(':id', $id, PDO::PARAM_STR);

         return $result->execute();
     }
     public static function editImage($id, $image){
         $db = Db::getConnection();
         $sql = "Update slide Set image_first = :image WHERE id=:id";
         $result = $db->prepare($sql);
         $result->bindParam(':image', $image, PDO::PARAM_STR);
         $result->bindParam(':id', $id, PDO::PARAM_STR);
         return $result->execute();

     }
     public static function deleteSlide($id){
         $db = Db::getConnection();
         $sql = "delete from slide WHERE id =".$id;
         return $result = $db->query($sql);
     }
 }