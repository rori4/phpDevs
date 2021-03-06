<?php

class UsersModel extends HomeModel
{
    public function register(string $username, string $email, string $password, string $full_name, string $user_role)
    {
     $password_hash= password_hash($password,PASSWORD_DEFAULT);
     $statement = self::$db->prepare(
         "INSERT INTO users(username, email, password_hash, full_name, user_role) VALUES(?,?,?,?,?)");
     $statement->bind_param("sssss", $username, $email, $password_hash, $full_name,$user_role);
     $statement->execute();
     if ($statement->affected_rows != 1)
         return false;
     $user_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
     return $user_id;
    }
    public function login(string $username, string $password)
    {
        $statement = self::$db->prepare(
            "SELECT id, password_hash FROM users WHERE username = ?");
        $statement->bind_param("s",$username);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        if (password_verify($password,$result['password_hash']))
            return $result['id'];
        return false;
    }

    public function checkUserRole(string $username, string $password)
    {
        $statement = self::$db->prepare(
            "SELECT id, password_hash,user_role FROM users WHERE username = ?");
        $statement->bind_param("s",$username);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        if (password_verify($password,$result['password_hash']))
            return $result['user_role'];
        return false;
    }

    public function getAll(): array
    {
        $statement = self::$db->query(
            "SELECT * FROM users ORDER BY username");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function checkEmail($email)
    {
        $statement = self::$db->query(
            "SELECT * FROM users WHERE email ='".$email."'" );
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function delete(int $id) : bool
    {
        $statement = self::$db->prepare(
            "DELETE FROM users WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function edit(string $username, string $email, string $full_name, string $password, string $user_role, int $id ) : bool
    {
        $statement = self::$db->prepare(
            "UPDATE users SET username = ?, email = ?,
            full_name = ?, password_hash = ?, user_role = ? WHERE id = ?");
        $statement->bind_param("sssssi", $username, $email, $full_name, $password, $user_role, $id);
        $statement->execute();
        return $statement->affected_rows >= 0;
    }

    public function forgottenPassChange(string $new_password, string $email) : bool
    {
        $statement = self::$db->prepare(
            "UPDATE users SET password_hash = ?
            WHERE email = ?");
        $statement->bind_param("ss", $new_password, $email);
        $statement->execute();
        return $statement->affected_rows >= 0;
    }
}
