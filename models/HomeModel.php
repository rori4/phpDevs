<?php

class HomeModel extends BaseModel
{
    function getLatestPosts(int $maxCount)
    {
        $statement = self::$db->query(
            "SELECT posts.id, title, content, date, full_name " .
            "FROM posts JOIN users on posts.user_id = users.id " .
            "ORDER BY date DESC LIMIT " . $maxCount);
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getPostById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT posts.id, title, content, date, full_name, user_id " .
            "FROM posts LEFT JOIN users ON posts.user_id = users.id " .
            "WHERE posts.id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function getUserById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM users WHERE id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function getPostComments(int $post_id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM comments WHERE post_id = ?");
        $statement->bind_param("i",$post_id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }
//    TODO: here
    public function create(string $title, string $content, int $user_id) : bool
    {
        $statement = self::$db->prepare(
            "INSERT INTO posts (title, content, user_id) VALUES (?,?,?)");
        $statement->bind_param("ssi", $title, $content, $user_id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}
