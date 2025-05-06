<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading margin-top-15">Question</h1>

            <?php

            include("./common/connection.php");

            $query = "SELECT * FROM `questions` WHERE `id` = $qid";

            $result = mysqli_query($conn, $query);

            $row = mysqli_fetch_assoc($result);         //we get output in array to convert it into row we use mysqli_fetch_assoc() function

            $cid = $row["category_id"];                 //category id

            echo "<h4 class='margin-bottom-15 question-title'>Question : " . $row["title"] . "</h4>
            <p class='margin-bottom-15'>" . $row["description"] . "</p>
            ";

            include("answers.php");
            ?>

            <form action="./server/requests.php" method="post">
                
                <!-- this input is required to connect answer with its question -->
                <input type="hidden" name="question_id" value="<?php echo $qid; ?>">        
                <textarea class="form-control margin-bottom-15" name="answer" placeholder="Your answer..."></textarea>
                <button class="btn btn-primary">Write Your Answer</button>

            </form>
        </div>

        <div class="col-4">
                        
            <?php 

                // this is for heading of category
                $categoryQuery = "SELECT name FROM `category` WHERE `id` = $cid";

                $categoryResult = mysqli_query($conn, $categoryQuery);

                $categoryRow = mysqli_fetch_assoc($categoryResult);

                echo "<h1 class='heading margin-top-15'>". ucfirst($categoryRow['name']) ."</h1>";


                // this is for question of category
                $query = "SELECT * FROM `questions` WHERE `category_id` = $cid && `id` != $qid";

                $result = mysqli_query($conn, $query);

                foreach($result as $row){

                    $id = $row['id'];
                    $title = $row['title'];

                    echo "<div class='question-list'>
                    <h4><a href='?q-id=$id'>$title</a></h4>
                    </div>";
                }
            ?>
        </div>
    </div>
</div>