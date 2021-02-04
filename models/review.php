<?php

class review
{
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn->connect();
    }

    public function add()
    {

        $name = $_POST['voornaam_review'];
        $lastname = $_POST['achternaam_review'];
        $email = $_POST['email_review'];
        $message = $_POST['message_review'];

        $review = $this->conn->prepare('INSERT INTO reviews (review_name, review_lastname, review_email, review_message ) VALUES (:name , :lastname, :email, :message)');
        $review->bindParam(':name', $name);
        $review->bindParam(':lastname', $lastname);
        $review->bindParam(':email', $email);
        $review->bindParam(':message', $message);
        $review->execute();

    }

    public function get()
    {
        $chats = $this->conn->prepare('SELECT * FROM chats');
        $chats->execute();

        return $chats->fetchAll();
    }
}