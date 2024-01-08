<?php

$name = $email = $project = $date = '';
$errors = array('name' => '','email' => '', 'project' => '', 'date'=> '' );

if(isset($_POST['submit'])){

    if(empty($_POST['name'])){
        $errors['name'] = "Name is Required <br />";
    }else{
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/' , $name)){
           $errors['name'] = "Please Input Your Name" ;
        }
    }

    if(empty($_POST['email'])){
        $errors['email'] =  "Email Address is Required <br />";
    }else{
        
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email Address must be valid " ;
        }
    }

    if(empty($_POST['project'])){
        $errors['project'] =  "Project Title is Required <br />";
    }else{
        $project = $_POST['project'];
        if(!preg_match('/^[a-zA-Z0-9\s]+$/', $project)){
            $errors['project'] = "Project must be in Letters, Numbers and Spaces " ;
       } 
    }

    if(empty($_POST['date'])){
        $errors['date'] = "Date is Required <br />";
    }else{
        $date = $_POST['date'];
        
        if(!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)){
            $errors['date'] = "Invalid Date Format";
        } 
    }

    if(!array_filter($errors)){
        // echo 'errors in the form';
    }else{
        // echo 'Form is Valid';

        header('location:TheDarwinProject.php');
        exit ();
    }

}

// First Level Security
?>

<!DOCTYPE html>
<html lang="en">
   <?php include('templates/header.php');?>

   <section class="container grey-text">
    <h4 class="center">Book A Project</h4>

    <form action="Add.php" class="white" method="POST">

        <label> Name:</label>
        <input type ="text" name="name"  value="<?php echo htmlspecialchars($name) ?>" >
        <div class="red-text"><?php echo $errors['name'];?></div>

        <label> Email Address:</label>
        <input type ="text" name="email" value="<?php echo htmlspecialchars($email) ?>" >
        <div class="red-text"><?php echo $errors['email'];?></div>


        <label> Project Title: </label>
        <input type ="text" name="project" value="<?php echo htmlspecialchars($project) ?>" >
        <div class="red-text"><?php echo $errors['project'];?></div>


        <label> Date Of Collection: </label>
        <input type ="date" name="date" value="<?php echo htmlspecialchars($date) ?>" >
        <div class="red-text"><?php echo $errors['date'];?></div>


        <div class="center">
            <input type ="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>

    </form>
   </section>
 
   <?php include('templates/footer.php');?>

</html>