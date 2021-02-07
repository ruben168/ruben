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

        if (isset($_POST['agree_review'])) {
            $_POST['agree_review'] = 'TRUE';
            } else {
            $_POST['agree_review'] = 'FALSE';
        }

        $name = $_POST['voornaam_review'];
        $lastname = $_POST['achternaam_review'];
        $email = $_POST['email_review'];
        $rating = $_POST['rating_review'];
        $message = $_POST['message_review'];
        $agree = $_POST['agree_review'];

        $review = $this->conn->prepare('INSERT INTO reviews (review_name, review_lastname, review_email, review_rating, review_message, review_agree ) VALUES (:name , :lastname, :email, :rating, :message, :agree)');
        $review->bindParam(':name', $name);
        $review->bindParam(':lastname', $lastname);
        $review->bindParam(':email', $email);
        $review->bindParam(':rating', $rating);
        $review->bindParam(':message', $message);
        $review->bindParam(':agree', $agree);
        $review->execute();

        header('location: index.php');

    }

    public function get()
    {
        $reviews = $this->conn->prepare('SELECT * FROM reviews');
        $reviews->execute();

        return $reviews->fetchAll();
    }

    public function stats()
    {
        $total = $this->conn->query('SELECT COUNT(*) FROM reviews');
        return $total->fetchColumn();
    }
}