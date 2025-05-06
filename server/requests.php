<?php

session_start();

include("../common/connection.php");

if (isset($_POST['signup'])) {      // Signup condition

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $query = "INSERT INTO `users` (`id`,`username`, `email`, `password`, `address`) VALUES (null,'$username','$email','$password','$address')";

    $result = mysqli_query($conn, $query);

    if($result) {

        $userid = mysqli_insert_id($conn);        // Fetch the auto-incremented ID

        $_SESSION['user'] = ['username' => $username, 'email' => $email, 'user_id' => $userid];

        header("location: /phpProjects/php-discuss-website");

    } else {
        echo "No new user is registered";
    }

} else if (isset($_POST["login"])) {              // Login condition

    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = "";
    $userid = "";


    $query = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows == 1) {

        foreach ($result as $row) {
            $username = $row["username"];
            $userid = $row["id"];
        }

        $_SESSION['user'] = ['username' => $username, 'email' => $email, 'user_id' => $userid];

        header("location: /phpProjects/php-discuss-website");

    } else {
        echo "No such User found";
    }

} elseif (isset($_GET["logout"])) {               // logout condition
  
    session_unset();
    
    header("location: /phpProjects/php-discuss-website");
    
} elseif (isset($_POST["ask"])) {                 // Ask a Que. condition
 
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];            // category is already return its id
    $user_id = $_SESSION['user']['user_id'];      //user_id from the session

    $query = "INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `user_id`) VALUES (null, '$title', '$description', '$category_id', '$user_id')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: /phpProjects/php-discuss-website");
    } else {
        echo "Question is not added to Database";
    }

} elseif (isset($_POST["answer"])) {               // Answer a Que. Condition

    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];        
    $user_id = $_SESSION['user']['user_id'];   

    $query = "INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`) VALUES (null, '$answer', '$question_id', '$user_id')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: /phpProjects/php-discuss-website/?q-id=$question_id");
    } else {
        echo "Answer is not Submitted";
    }

} elseif (isset($_GET["delete"])) {                    //Delete your question from my question

    $qid = $_GET["delete"];

    $query = "DELETE FROM `questions` WHERE `id` = $qid";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: /phpProjects/php-discuss-website/");
    }else{
        echo "Question is not deleted";
    }
}
