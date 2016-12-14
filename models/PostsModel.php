<?php

class PostsModel extends HomeModel
{
    function getAll()
    {
        $statement = self::$db->query(
            "SELECT posts.id,title,content,date, full_name " .
            "FROM posts JOIN users on posts.user_id = users.id " .
            "ORDER BY date DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

     public function create(string $title, string $content, int $user_id) : bool
     {
         $statement = self::$db->prepare(
             "INSERT INTO posts (title, content, user_id) VALUES (?,?,?)");
         $statement->bind_param("ssi", $title, $content, $user_id);
         $statement->execute();
         return $statement->affected_rows == 1;
     }
}
