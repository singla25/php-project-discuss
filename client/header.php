<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="./public/logo.png" alt="logo"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>

        <?php
        // $userlogin on index.php
        if ($userLogin) {
        ?>
        
          <li class="nav-item">
            <a class="nav-link " href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="?ask=true">Ask A Question</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php?logout=true"> Log Out (<?php echo ucfirst($_SESSION['user']['username']); ?>) </a>
          </li>

        <?php } ?>

        <?php
        if (!$userLogin) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">Sign Up</a>
          </li>

        <?php } ?>
      </ul>
    </div>

    <form class="d-flex" action="">
      <input class="form-control me-2" name="search" type="search" placeholder="Search Questions">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
  </div>
</nav>