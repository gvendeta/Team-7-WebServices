<?php 
include './phpQueries/getUserInfo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Settings Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    color: #818b94;
    background-color: #f4f6f9;
}
.avatar-xl img {
    width: 110px;
}
.rounded-circle {
    border-radius: 50% !important;
}
img {
    vertical-align: middle;
    border-style: none;
}
.text-muted {
    color: #aeb0b4 !important;
}
.text-muted {
    font-weight: 300;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #4d5154;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #eef0f3;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.hide {
    visibility: hidden;
}
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script>
   $(document).ready(function(){
    $('#firstname').prop('disabled', true);
    $('#lastname').prop('disabled', true);
    $('#inputEmail4').prop('disabled', true);
    $('#inputAddress5').prop('disabled', true);
    $('#inputState5').prop('disabled', true);
    $('#inputZip5').prop('disabled', true);
    $('#inputphonenum5').prop('disabled', true);


    $('#pageEdit').click(function(){
        $('#firstname').prop('disabled', false);
        $('#lastname').prop('disabled', false);
        $('#inputEmail4').prop('disabled', false);
        $('#inputAddress5').prop('disabled', false);
        $('#inputState5').prop('disabled', false);
        $('#inputZip5').prop('disabled', false);
        $('#inputphonenum5').prop('disabled', false);

        $("div").removeClass("hide");
    }); 

    });


</script>
</head>
<body>
    <!--Navigation bar-->
<div id="nav-placeholder">

</div>

<script>
$(function(){
  $("#nav-placeholder").load("../nav.php");
});
</script>

<!--end of Navigation bar-->
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 col-xl-8 mx-auto">
<h2 class="h3 mb-4 page-title">Settings</h2>
<div class="my-4">
<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="./preferences.php">Preferences</a>
</li>
</ul>

<form action="./phpQueries/updateUserInfo.php" method="post">
    <div class="row mt-5 align-items-center">
    <div class="col-md-3 text-center mb-5">
    <div class="avatar avatar-xl">
    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="..." class="" />
    </div>
    </div>
    <div class="col">
    <button type="button" id="pageEdit" class="btn btn-primary" style="position:relative;left:500px">Edit Page</button>
    <div class="row align-items-center">
    <div class="col-md-7">
    <h4 class="mb-1"><?php echo $firstName . ' ' . $lastName?></h4>
    <p class="small mb-3"><span class="badge badge-dark"><?php if(isset($stateShort)){echo $stateShort.', ';}?>USA</span></p>
    </div>
    </div>
    <div class="row mb-4">
    <div class="col-md-7">
    <p class="text-muted">
    Gamer's Bio.
    </p>
    </div>
    <div class="col">
    </div>
    </div>
    </div>
    </div>
    <hr class="my-4" />
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="firstname">Firstname</label>
    <input type="text" required name="firstname" id="firstname" class="form-control" value="<?php echo $firstName;?>" />
    </div>
    <div class="form-group col-md-6">
    <label for="lastname">Lastname</label>
    <input type="text" required name="lastname" id="lastname" class="form-control" value="<?php echo $lastName;?>" />
    </div>
    </div>
    <div class="form-group">
    <label for="inputEmail4">Email</label>
    <input type="email" required class="form-control" name="inputEmail" id="inputEmail4" value="<?php echo $email;?>" />
    </div>
    <div class="form-group">
    <label for="inputAddress5">Address</label>
    <input type="text" class="form-control" value ="<?php echo $address ?>" name="inputAddress" id="inputAddress5"/>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputphonenum5">Phone Number</label>
    <input type="text" required class="form-control" name ="inputphonenum" id="inputphonenum5" value ="<?php echo $phoneNum;?>" />
    </div>
    <div class="form-group col-md-4">
    <label for="inputState5">State</label>
    <select name="inputState" id="inputState5" class="form-control">
    <option selected><?php echo $state?></option>
        <?php 
            while ($allStates = mysqli_fetch_array($stateResults,MYSQLI_ASSOC)):;
        ?>
    <option><?php echo $allStates["state"];?>
    </option>
    <?php endwhile ?>
    </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputZip5">Zip</label>
    <input type="text" class="form-control" name="inputZip" id="inputZip5" disabled value ="<?php echo $zip ?>" />
    </div>
    </div>
    <hr class="my-4" />
    <div class="hide">
    <div class="row mb-4">
    <div class="col-md-6">
    <div class="form-group">
    <label for="inputPassword4">Old Password</label>
    <input type="password" class="form-control" id="inputPassword4" />
    </div>
    <div class="form-group">
    <label for="inputPassword5">New Password</label>
    <input type="password" class="form-control" id="inputPassword5" />
    </div>
    <div class="form-group">
    <label for="inputPassword6">Confirm Password</label>
    <input type="password" class="form-control" id="inputPassword6" />
    </div>
    </div>
    <div class="col-md-6">
    <p class="mb-2">Create Password</p>
    <p class="small text-muted mb-2">Password Requirements</p>
    <ul class="small text-muted pl-4 mb-0">
    <li>Minimum 8 characters</li>
    <li>At least one special character</li>
    <li>At least one uppercase letter</li>
    <li>At least one lowercase letter</li>
    <li>At least one number</li>
    </ul>
    </div>
    </div>
    <button type="submit"  class="btn btn-primary">Save Changes</button>
    </div>
</form>

</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>