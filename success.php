<?php
    $title = 'Success'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$gender.$ext";
        move_uploaded_file($orig_file,$destination);

        //Call function to insert and track if success or not
        $isSuccess = $crud->insertclient($fname, $lname, $dob, $address,$gender, $destination,$email);
        $genderName = $crud->getgenderById($gender);
        
        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to IT Conference 2019', 'You have successfully registerted for this year\'s IT Conference');
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }

    }
?>
    
    <img src="<?php echo $destination; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $genderName['sex'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Address: <?php echo $_POST['address'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $_POST['email'];  ?>
            </p>
                
        </div>
    </div>
    

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>