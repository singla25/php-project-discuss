<div class="container">
    <h1 class="heading">Sign Up</h1>
    
    <form method="post" action="./server/requests.php">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter User Email">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter User password">
        </div>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="address" class="form-label">User Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter User Address">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
        </div>
    </form>
</div>