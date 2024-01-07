<?php

if(isset($_POST['submit'])){
    
}

?>

<!DOCTYPE html>
<html lang="en">
   <?php include('templates/header.php');?>

   <section class="container grey-text">
    <h4 class="center">Book A Project</h4>

    <form action="Add.php" class="white" method="POST">

        <label> Name:</label>
        <input type ="text" name="name" >

        <label> Email Address:</label>
        <input type ="text" name="email" >

        <label> Project Title: </label>
        <input type ="text" name="name" >

        <label> Date Of Collection: </label>
        <input type ="date" name="date" >

        <div class="center">
            <input type ="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>

    </form>
   </section>
 
   <?php include('templates/footer.php');?>

</html>