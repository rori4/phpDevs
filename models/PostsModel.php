<?php

class PostsModel extends HomeModel
{
     public function create(string $title, string $content, int $user_id) : bool
     {
         $statement = self::$db->prepare(
             "INSERT INTO posts (title, content, user_id) VALUES (?,?,?)");
         $statement->bind_param("ssi", $title, $content, $user_id);
         $statement->execute();
         return $statement->affected_rows == 1;
     }

    public function delete(int $id) : bool
    {
        $statement = self::$db->prepare(
            "DELETE FROM posts WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function edit(string $id, string $title, string $content, string $date, int $user_id) : bool
    {
        $statement = self::$db->prepare(
            "UPDATE posts SET title = ?, 
            content = ?, date = ?, user_id = ? WHERE id = ?");
        $statement->bind_param("sssii", $title, $content, $date, $user_id, $id);
        $statement->execute();
        return $statement->affected_rows >= 0;
    }
// Attempt to get User Posts for certain user
//--------------------------------------------------------------
    public function showUserPosts(int $id)
    {
        $statement = self::$db->query(
            "SELECT posts.id, title, content, date, user_id, full_name
            FROM posts JOIN users ON posts.user_id = users.id
            WHERE user_id = " . $id);
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function allAuthors(): array
    {
        $statement = self::$db->query(
            "SELECT * FROM users ORDER BY username");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}
