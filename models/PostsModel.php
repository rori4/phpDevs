<?php

class HomeModel extends BaseModel
{
    function getAll()
    {
        $statement = self::$db->query(
            "SELECT posts.id,title,content,date, full_name " .
            "FROM posts JOIN users on posts.user_id = users.id " .
            "ORDER BY date DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}
