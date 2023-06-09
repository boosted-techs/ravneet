<!-- header section starts  -->
<style>
    .menu ul>li {
        text-transform: capitalize;
    }
</style>
<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo">
             <img src="images/white.png" style="width:100px"/>
         </a>
         <ul>
             <?=
             isset($_COOKIE['user_id']) ? "<li><a href=\"dashboard.php\"><i class='fa fa-dashboard'></i> Dashboard</a></li>" : "<li><a href=\"login.php\"><i class='fa fa-sign-in'></i> LOGIN</a></li>";
             ?>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
                <li><a href="home.php"><i class="fa fa-home"></i> HOME</a></i></li>
                <li><a href="about.php">about us</a></i></li>
                <li><a href="contact.php">contact us</a></i></li>
                <li><a href="contact.php#faq">FAQ</a></i></li>
                <li><a class="l-active"  href="post_property.php">post property</a></li>
                <li><a href="#">options<i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="search.php">filter search</a></li>
                        <li><a href="listings.php">all listings</a></li>
                        <?=
                        isset($_COOKIE['user_id']) ? "<li><a href=\"dashboard.php\">dashboard</a></li>" : "<li><a href=\"login.php\">LOGIN</a></li>";
                        ?>
                        <?=
                        isset($_COOKIE['user_id']) ? "<li><a href=\"my_listings.php\">my listings</a></li>" : "";
                        ?>
                        <?=
                        isset($_COOKIE['user_id']) ? "<li><a href=\"components/user_logout.php\">Logout</a></li>" : "";
                        ?>
                    </ul>
                </li>
            </ul>
         </div>
<!--         <ul>-->
<!--            <li><a href="saved.php">saved <i class="far fa-heart"></i></a></li>-->
<!--            <li><a href="#">account <i class="fas fa-angle-down"></i></a>-->
<!--               <ul>-->
<!--                  <li><a href="login.php">login now</a></li>-->
<!--                  <li><a href="register.php">register new</a></li>-->
<!--                  --><?php //if($user_id != ''){ ?>
<!--                  <li><a href="update.php">update profile</a></li>-->
<!--                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>-->
<!--                  --><?php //} ?><!--</li>-->
<!--               </ul>-->
<!--            </li>-->
<!--         </ul>-->
      </section>
   </nav>

</header>

<!-- header section ends -->