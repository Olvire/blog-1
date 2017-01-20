<?php

    class Blog{

        const SHOW_BY_DEFAULT = 3;
        public static function latestItemBlog($count = self::SHOW_BY_DEFAULT){

            $db = Db::getConnection();

            $blogList = array();

            $sql ="Select * from blog WHERE status = '1' ORDER BY id DESC limit $count";
            $result = $db->query($sql);

            $i = 0;
            while ($row = $result->fetch()){
                $blogList[$i]['id'] = $row['id'];
                $blogList[$i]['alias'] = $row['alias'];
                $blogList[$i]['title_Item'] = $row['title_Item'];
                $blogList[$i]['description_Item'] = $row['description_Item'];
                $blogList[$i]['h2_Item'] = $row['h2_Item'];
                $blogList[$i]['content_Item'] = $row['content_Item'];
                $blogList[$i]['status'] = $row['status'];
                $blogList[$i]['long_content'] = $row['long_content'];
                $blogList[$i]['image'] = $row['image'];
                $i++;
            }

            return $blogList;

        }

        public static function getItemByAlias($alias){

           $db = Db::getConnection();

           $sql = "Select * from blog WHERE alias ='$alias'";

             $result = $db->query($sql);

            return $result->fetch();



        }

        public static function getItemById($id){

            $db = Db::getConnection();

            $sql = "Select * from blog WHERE id ='$id'";

            $result = $db->query($sql);

            return $result->fetch();



        }

        public static function saveItem($id, $title_Item, $alias, $description_Item, $h2_Item, $content_Item, $status, $long_content){
          $db = Db::getConnection();
            $sql = "Update blog Set title_Item = :title_Item, alias = :alias, description_Item =  :description_Item, h2_Item =  :h2_Item, content_Item = :content_Item, status = :status, long_content =  :long_content WHERE id=:id";


            $result = $db->prepare($sql);
            $result->bindParam(':title_Item', $title_Item, PDO::PARAM_STR);
            $result->bindParam(':alias', $alias, PDO::PARAM_STR);
            $result->bindParam(':description_Item', $description_Item, PDO::PARAM_STR);
            $result->bindParam(':h2_Item', $h2_Item, PDO::PARAM_STR);
            $result->bindParam(':content_Item', $content_Item, PDO::PARAM_STR);
            $result->bindParam(':status', $status, PDO::PARAM_STR);
            $result->bindParam(':long_content', $long_content, PDO::PARAM_STR);
            $result->bindParam(':id', $id, PDO::PARAM_STR);

            return $result->execute();
        }

        public static function createItem($title_Item, $alias, $image, $description_Item, $h2_Item, $content_Item, $status, $long_content){
            $db = Db::getConnection();
            $sql = "Insert  into blog (title_Item, alias , image, description_Item , h2_Item , content_Item, status, long_content)
                    VALUES (:title_Item, :alias,  :image, :description_Item, :h2_Item, :content_Item, :status, :long_content)";


            $result = $db->prepare($sql);
            $result->bindParam(':title_Item', $title_Item, PDO::PARAM_STR);
            $result->bindParam(':alias', $alias, PDO::PARAM_STR);
            $result->bindParam(':image', $image, PDO::PARAM_STR);
            $result->bindParam(':description_Item', $description_Item, PDO::PARAM_STR);
            $result->bindParam(':h2_Item', $h2_Item, PDO::PARAM_STR);
            $result->bindParam(':content_Item', $content_Item, PDO::PARAM_STR);
            $result->bindParam(':status', $status, PDO::PARAM_STR);
            $result->bindParam(':long_content', $long_content, PDO::PARAM_STR);
            return $result->execute();
        }

        public static function deleteNews($id){
            $db = Db::getConnection();
            $sql = "delete from blog WHERE id =".$id;
            return $result = $db->query($sql);
        }

        public static function editImage($id, $image){
            $db = Db::getConnection();
            $sql = "Update blog Set image = :image WHERE id=:id";
            $result = $db->prepare($sql);
            $result->bindParam(':image', $image, PDO::PARAM_STR);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            return $result->execute();

        }

        public static function BlogUrl($alias){
            $db = Db::getConnection();
            $sql = "Select alias from blog WHERE alias ='$alias'";
            $result =$db->query($sql);
            return $result->fetch();
        }
        public static function getNewsBlog($page){

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
    }