<div>
    <h1 class="heading margin-top-15">Categories</h1>
    
    <?php

    include("./common/connection.php");
    $query = "SELECT * FROM `category`";
    $result = mysqli_query($conn, $query);
    
    foreach ($result as $row) {
        $name = ucfirst($row['name']);
        $id = $row['id'];

        echo "<div class='row category-list'>
                <h4><a href='?c-id=$id'>$name</a></h4>
             </div>";
    }

    ?>
</div>