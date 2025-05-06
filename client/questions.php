<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading margin-top-15">Questions</h1>
            <?php
            include("./common/connection.php");

            if(isset($_GET["c-id"])){
                $query = "SELECT * FROM `questions` WHERE category_id = $cid";              //c-id category id from index.php

            } elseif (isset($_GET["u-id"])) {
                $query = "SELECT * FROM `questions` WHERE user_id = $uid";                  //u-id from header.php to print My questions

            } elseif (isset($_GET["latest"])) {
                $query = "SELECT * FROM `questions` order by id desc";                      //for latest questions
            
            } elseif (isset($_GET["search"])) {
                $query = "SELECT * FROM `questions` WHERE `title` LIKE '%$search%'";        //to search a question from database
            
            } else {
                $query = "SELECT * FROM `questions`";                                       //to print all questionson a page
            }

            $result = mysqli_query($conn, $query);

            foreach ($result as $row) {

                $title = $row['title'];
                $id = $row['id'];

                echo "<div class='row question-list'>
                    <h4 class='my-questions'><a href='?q-id=$id'>$title</a>";
                    
                    echo isset($uid) ? "<a href='./server/requests.php?delete=$id'>Delete</a>" : NULL;

                    echo "</h4></div>";
            }
            ?>
        </div>

        <div class="col-4">
            <?php
                include("categorylist.php");
            ?>
        </div>
    </div>
</div>