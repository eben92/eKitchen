<?php include('partials-front/menu.php'); ?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
 <div class="container">

  <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
   <input type="search" name="search" placeholder="Search for Food.." required>
   <input type="submit" name="submit" value="Search" class="btn btn-primary">
  </form>

 </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->



<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
 <div class="container">
  <h2 class="text-center">Food Menu</h2>
  <div class="food-search-box-container">
   <?php 
                //Display Foods that are Active
                $sql = "SELECT * FROM tbl_food WHERE active='Yes'";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the foods are availalable or not
                if($count>0)
                {
                    //Foods Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        ?>

   <div class="food-menu-box">
    <div class="food-menu-img food-search-container">
     <?php 
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
     <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive image-s img-curve mr-3">
     <?php
                                    }
                                ?>



     <div class="food-menu-desc">
      <h4><?php echo $title; ?></h4>
      <div class="d-flex">
       <p class="food-price">GH&#8373; <?php echo $price; ?></p>
      </div>
      <p class="food-detail">
       <?php echo $description; ?>
      </p>
     </div>
     <br>

    </div>

    <div class="mt-4 d-flex justify-content-center">
     <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="order-now bg-dark w-100 text-center">Order Now</a>
    </div>
   </div>

   <?php
                    }
                }
                else
                {
                    //Food not Available
                    echo "<div class='error'>Food not found.</div>";
                }
            ?>
  </div>




  <div class="clearfix"></div>



 </div>

</section>
<!-- fOOD Menu Section Ends Here -->

<?php include('partials-front/footer.php'); ?>