<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project - Discuss Website</title>

    <!-- it is used to connect stylesheet, bootstrap at different page -->
    <?php include('./client/commonFiles.php') ?>   
</head>

<body>
    <?php

    session_start();

    $userLogin = (bool) isset($_SESSION['user']['username']) && $_SESSION['user']['username'];
    
    include('./client/header.php');

    // !$userLogin is a condition that once a user registered itself then he or she can't go on sign up and login page again

    if (isset($_GET['signup']) && !$userLogin) {               //Signup page
        include('./client/signUp.php');

    } else if (isset($_GET['login']) && !$userLogin) {         //Login page
        include('./client/logIn.php');

    } else if (isset($_GET['ask'])) {                          //Ask a question page
        include('./client/ask.php');

    } else if (isset($_GET['q-id'])) {                         //q-id comes from question.php
        $qid = $_GET['q-id'];                                  //it is used in question-details page
        include('./client/question-details.php');

    } else if (isset($_GET['c-id'])) {                         //c-id = category_id from questions table in question-detail page
        $cid = $_GET['c-id'];                                  //it is used in categorylist page
        include('./client/questions.php');

    } else if (isset($_GET['u-id'])) {                         //u-id user id from header.php from my questions       
        $uid = $_GET['u-id'];                                  //it is used in my questions
        include('./client/questions.php');

    } else if (isset($_GET['latest'])) {                       //it is used for latest question                                                   
        include('./client/questions.php');                     

    } else if (isset($_GET['search'])) {                       //to search a ques. from search bar
        $search = $_GET['search'];                             
        include('./client/questions.php');  

    } else {
        include('./client/questions.php');
    }
    ?>
</body>

</html>