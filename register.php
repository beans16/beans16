<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Online Application</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> 
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
  <style type="text/css">
    #title-header {
  background-color: #fff; 
  border-bottom: 1px solid #ddd; 
  height: 50px;  
  padding: 10px 0px;
  text-align: center;
  color: #black;
  font-size: 18px;
}
 
  </style>
<section id="title-header">
  <div class="title">  
  <img src="images/BCPlogo.png" style="width: 2%;object-fit: contain;height: 100%" alt="IMG">
          BESTLINK COLLEGE OF THE PHILIPPNES
      
  </div>
</section> 
 <div class="container" style="min-height: 500px;">  
      <p class="page-header" style="font-size: 30px;">Sign Up</p>
      <?php check_message(); ?>
    <div id="login-dp">
 <form class="form-horizontal span6" action="" method="POST" enctype="multipart/form-data" id="login-nav">
 

                <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "FNAME">First Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "First Name" type="text" value="" required>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "LNAME">Last Name:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Last Name" type="text" value=""  required>
                      </div>
                    </div>
                  </div>
  
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "ADDRESS">Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" value=""  required>
                      </div>
                    </div>
                  </div> 
                 
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PHONE">Contact No.:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                            "Contact Number" type="text" value="" required>
                      </div>
                    </div>
                  </div> 
                  
                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "USERNAME">Username:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
                            "Username" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "PASS">Password:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="PASS" name="PASS" placeholder=
                            "Password" type="password" value="">
                      </div>
                    </div>
                  </div>
  
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-12">
                                  <div class="form-floating">
                                    <select class="form-select" name="course" id="course" aria-label="State" Required onchange="oncollapse()">
                                                <option value="#" selected="selected" disabled="disabled">Select Course</option>
                                      <option value="BSIT">BS Information Technology</option>
                                      <option value="BSHM">BS Hospitality Management</option>
                                      <option value="BSOA">BS Office Administration</option>
                                      <option value="BSBA Major in HRM">BS Business Administration Major in Human Resource Management</option>
                                      <option value="BSBA Major in Marketing">BS Business Administration Major in Marketing</option>
                                      <option value="BSCriM">BS Criminology</option>
                                      <option value="BEEd">Bachelor of Elementary Education</option>
                                      <option value="BSEd Major in English">Bachelor of Secondary Education Major in English</option>
                                      <option value="BSEd Major in Filipino">Bachelor of Secondary Education Major in Filipino</option>
                                      <option value="BSEd Major in Mathematics">Bachelor of Secondary Education Major in Mathematics</option>
                                      <option value="BSEd Major in Social Studies">Bachelor of Secondary Education Major in Social Studies</option>
                                      <option value="BSEd Major in Values Education">Bachelor of Secondary Education Major in Values Education</option>
                                      <option value="BTLeD">Bachelor of Technology and Livelihood Education </option>
                                      <option value="BPEeD">Bachelor of Physical Education</option>
                                      <option value="BSCE">BS Computer Engineering</option>
                                      <option value="BLIS">Bachelor of Library in Information Science</option>
                                      <option value="BSTM">BS Tourism Management</option>
                                      <option value="BSEntrep">BS Entrepreneurship</option>
                                      <option value="BSAIS">BS Accounting Information System</option>
                                      <option value="BSPsy">BS Psychology</option>                                  
                                    </select>
                                    
                                  </div>
                                </div>   
                                

                      <div class="col-md-8">
                        <button type="submit" name="btnRegister" class="btn btn-primary btn-sm">Register</button>
                        <a href="login.php"><i class="fa fa-arrow-left"></i> Back to Login</a>
                           
                     </div>
                    </div>
                  </div> 
        
 
          
        </form>
       </div>
</div>

<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("register.php");
}

?>
   <footer style="height: 100px;border-top:1px solid #ddd;padding: 5px;background-color: whte; color:#white;">
              <p align="left">&copy; BESTLINK COLLEGE OF THE PHILIPPINES</p>
     </footer>
 </section>
 