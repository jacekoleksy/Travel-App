<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users u LEFT JOIN users_details ud 
            ON u.id_users = ud.id_users_details WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password)
            VALUES (?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (id_users_details, name, surname)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $this->getUserId($user),
            $user->getName(),
            $user->getSurname(),
        ]);
    }


    // public function getUserDetailsId(User $user): int
    // {
    //     $stmt = $this->database->connect()->prepare('
    //         SELECT * FROM public.users_details WHERE name = :name AND surname = :surname AND phone = :phone
    //     ');
    //     $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
    //     $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
    //     $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);
    //     $stmt->execute();

    //     $data = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $data['id'];
    // }

    public function getUserId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email AND password = :password
        ');
        $stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindParam(':password', $user->getPassword(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id_users'];
    }

    public function getPassword(User $user): string
    {
        return $user->getPassword();
    }

    public function editUser(User $user, $email, $password, $name, $surname) {
        $id = $this->getUserId($user);

        $stmt = $this->database->connect()->prepare('
            UPDATE users
            SET email = ?, password = ?
            WHERE id_users = ?;
        ');

        $stmt->execute([
            $email,
            $password,
            $id,
        ]);

        $stmt = $this->database->connect()->prepare('
            UPDATE users_details
            SET name = ?, surname = ?
            WHERE id_users_details = ?;
        ');

        $stmt->execute([
            $name,
            $surname,
            $id,
        ]);
    }
}