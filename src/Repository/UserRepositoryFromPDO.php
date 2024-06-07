<?php

namespace Project\Repository;

use Project\Entity\User;
use PDO;

class UserRepositoryFromPdo
{
    public function create(User $user): void
    {
        $stmt = $this->pdo->prepare(<<<SQL
        INSERT INTO users
        (id, user_fullname, user_username, user_email, user_password)
        VALUES
        (:user_id, :user_fullname, :user_username, :user_email, :user_password)
        SQL);

        $id = uniqid('user_id', true);

        $stmt->execute([
            ':user_id' => $user_id,
            ':user_fullname' => $user->user_fullname(),
            ':user_username' => $user->user_username(),
            ':user_email' => $user->user_email(),
            ':user_password' => $user->user_passwordantity(),
        ]);
    }
    public function get_all(): array
    {
        $stmt = $this->pdo->prepare(<<<SQL
        SELECT * FROM users
        SQL);

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function find(string $id): User
    {
        $stm = $this->pdo->prepare(<<<SQL
            SELECT id, user_fullname, user_username, user_email, user_password
            FROM users
            WHERE id=:user_id
        SQL);

        $stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, User::class);
        $stm->bindParam(':user_id', $id);
        $stm->execute();

        return $stm->fetch();

    }

    public function update()
    {
        $id = $_POST['id'];
        $user_fullname = $_POST['fullname'];
        $user_username = $_POST['username'];
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];

        $params = [
            ':user_id' => $id,
            ':user_fullname' => $user_fullname,
            ':user_username' => $user_username,
            ':user_email' => $user_email,
            ':user_password' => $user_password,
        ];

        $productRepository = ProductRepositoryFactory::make();

        $sql = "UPDATE users SET 
                user_fullname=:user_fullname, 
                user_username=:user_username, 
                user_email=:user_email,
                user_password=:user_password
                WHERE id=:user_id";
        $productRepository->pdo->prepare($sql)->execute($params);
    }

    public function delete($id): void
    {
        $id = (string)filter_input(INPUT_GET, 'id');
        $sql = "DELETE FROM users WHERE id=?";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}