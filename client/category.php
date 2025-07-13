<select class="form-control" name="category" id="category">
    <option value="">Select a Category</option>
    <?php 
        include("./common/connection.php");
        $query = "SELECT * FROM `category`";
        $result = mysqli_query($conn, $query);
        
        // ucfirst() is a function to capatilized the first letter of word
        foreach($result as $row){

            $id = $row['id'];
            $name = ucfirst($row['name']);
            
            echo "<option value=$id> $name </option>";
        }
    ?>
</select>