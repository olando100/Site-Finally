<?php
    $title = 'Registration'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getgender();

?>
 
    <h1 class="text-center">News Letter Registration </h1>

    <form method="post" action="success.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['gender_id'] ?>"><?php echo $r['sex']; ?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="text">Address</label>
            <input required type="text" class="form-control" id="address"  name="address">
            
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
               <br/>
        <div class="custom-file">
            <label for="Text">Upload Image</label>
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

        </div>
        
        
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<br>