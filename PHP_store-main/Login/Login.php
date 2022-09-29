<?php
session_start();
include_once '../Configration/connection.php';
if (isset($_GET['submit'])){
     
    $loginEmail=$_GET['loginEmail'];
    $_SESSION['email']=$loginEmail;
    $loginPassword=$_GET['loginPassword'];
    $adminEmail_correct=true;
    $adminPass_correct=true;
    $loginEmail_correct =true;
    $loginPassword_correct=true;
    $sql1="SELECT * FROM register WHERE Email='$loginEmail';";
    
    $result= mysqli_query($conn,$sql1);
    $result_check= mysqli_num_rows($result);
    if ($result_check > 0) {
       
        while ($row=mysqli_fetch_assoc($result)) {

            print_r($row['Email']);
            print_r($row['Password']);

            if(($loginEmail==$row['Email']&& $loginEmail!='')){
                $loginEmail_result="<br><small style='color:white'>✅ Correct Email</small><br>";
                $loginEmail_correct=true;
               
            }else{
                $loginEmail_result="<br><small style='color:white'>❌Incorrect Email</small><br>";
                $loginEmail_correct=false;
        }

                if(($loginPassword==$row['Password']&& $loginPassword!='')){
                    $loginPassword_result="<br><small style='color:white'>✅ Correct Password</small><br>";
                    $loginPassword_correct=true;
                   
                }else{
                    $loginPassword_result="<br><small style='color:white'>❌Incorrect Password</small><br>";
                    $loginPassword_correct=false;
            }
        }
        
    }   
    
    if($loginEmail_correct && $loginPassword_correct){
        header('location:../index.php');
      
        $row['last-login']= date("d-m-Y - h:i:sa");
        
    }else{
    echo '<script language="javascript">';
    echo 'alert("❌ Incorrect Information")'; 
    echo '</script>';
    }
    
  //   if($loginEmail=="admin@gmail.com"){
	// 	if($loginPassword== "AdminAdmin1"){
  //           $loginEmail_result="<br><small style='color:white'>✅ Correct Email</small><br>";
	// 		$adminEmail_correct=true;
	// 		$adminPass_correct=true;
	
	// 	}else{
	// 		$loginPassword_result="<br><small style='color:white'>❌Incorrect Password</small><br>";
	//     	$adminPass_correct=false;
	// 	}
	// }else{
	// 	$loginEmail_result="<br><small style='color:white'>❌Incorrect Password or Email</small><br>";
	// 	$adminEmail_correct=false;
	// }
	// if ($adminEmail_correct && $adminPass_correct ){
	// 	header('location:index.php');
	// }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>

<div class="login-cont">
    <div class="login-form">
    <form method="GET">
         <h2 class="form-header-login"><span class="ll">L</span>OGIN</h2><hr><br>
        
              <input type="email" name="loginEmail" id="loginEmail"   placeholder="Email" class="form-inputt"><br><br>
              <?php if(isset($loginEmail_result)){echo $loginEmail_result;}?>
         
              <input type="password" name="loginPassword" id="loginPassword"  placeholder="Password" class="form-inputt">
              <?php if(isset($loginPassword_result)){echo $loginPassword_result;}?>
          
          <h4 class="btttn-login">Don't have an account <a style="color:#694E4E" href="../Regestration/Signup.php" >Sign Up!</h4>
          
            <button type="submit" name="submit" class="bttn-login">
              <strong class="btttn-login" >Log in</strong>
            </button>
</form>
</div>
</div>

</body>
</html>