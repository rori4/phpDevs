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

    function getAll()
    {
        $statement = self::$db->query(
            "SELECT posts.id,title,content,date, full_name
            FROM posts JOIN users on posts.user_id = users.id 
            ORDER BY date DESC ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getPostById(int $postId)
    {
        $statement = self::$db->prepare(
            "SELECT posts.id, title, content, date, full_name, user_id
            FROM posts LEFT JOIN users ON posts.user_id = users.id
            WHERE posts.id = ?");
        $statement->bind_param("i",$postId);
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
        $statement = self::$db->query(
            "SELECT comments.id,comments,date,user_id,post_id,username FROM comments JOIN users ON comments.user_id = users.id WHERE post_id = " . $post_id);
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
//    TODO: here
    public function addComment(string $comment, int $user_id, int $post_id) : bool
    {
        $statement = self::$db->prepare(
            "INSERT INTO comments (comments, user_id, post_id) VALUES (?,?,?)");
        $statement->bind_param("sii", $comment, $user_id, $post_id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
}
