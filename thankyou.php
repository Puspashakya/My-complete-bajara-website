<?php
include "includes/head.php"
?>

<body>

  <div class="site-wrap"> 


    <?php
    include "includes/header.php";
    add_order();
    ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section" style="background-color: #00bfff">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">

            <h2 class="display-3 text-black"><strong>Thank you! <strong></strong></h2>
            <p class="lead mb-5">order is placed</p>
            <p><a href="store.php" class="btn btn-md height-auto px-4 py-3 btn-primary">Go Back </a></p>
          </div>
        </div>
      </div>
    </div>


    <?php
    include "includes/footer.php"
    ?>
  </div>
</body>

</html>