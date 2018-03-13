<?php include("slug-finder.php"); ?>
<!DOCTYPE html>
  <html lang="en">
  <?php include("header.php"); ?>
  <body <?php if($module==="home"){ echo "class='home'"; }?>>

    <?php include("nav.php"); ?>

    <div class="main">
      <?php
        if($module === "home"){
          include("content/home-index.php");
        } else {
          echo '<section><h1>' . $title . '</h1>' . $body . '</section>';
        }
      ?>

      <?php include("footer.php"); ?>

    </div>

  </body>
</html>