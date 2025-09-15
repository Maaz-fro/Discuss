<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./"><img style="width: 70px;" src="./public/discussfavicon.png" alt="logo"></a>
    

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
        </li> -->

        <!-- <?php
              if ($_SESSION['user']['username']) { ?>
        <li class="nav-item">
           <a class="nav-link" href="?login=true">Logout</a>
        </li>
        <?php } ?>

        <?php
        if (!$_SESSION['user']['username']) { ?>
         <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign In</a>
        </li>
        <?php } ?> -->

        <?php
        if (isset($_SESSION['user']) && isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
             <a class="nav-link" href="./server/requests.php?logout=true">Logout(<?php echo ucfirst($_SESSION['user']['username']) ?>)</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="?ask=true">ASk a Question</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Question</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">Sign In</a>
          </li>
        <?php } ?>





        <!-- <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign In</a>
        </li> -->

      
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
      </ul>
    
    </div>
      <form class="d-flex" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Search questions"/>
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
  </div>
</nav>