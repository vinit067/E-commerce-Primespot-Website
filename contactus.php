<?php
// include header.php file
include ('header.php');
?>

<?php
try{
  $db = new mysqli("localhost","root","","shopee");

} catch (Exception $exc) {
  echo $exc->getTraceAsString();  
}
  if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
   $is_insert = $db->query("INSERT INTO `contact_us`(`id`, `name`, `email`, `subject`, `message`) VALUES ('$id','$name','$email','$subject','$message')");
  if($is_insert == TRUE){
    echo "<h2>Thank You</h2>";
    exit();
  }
  }
?>


<br>  

<!DOCTYPE html>
<html lang="en">

    <div class="content-23">
        <h1>Contact Us</h1>
       
    </div>

  
   <div class="Container">
        <div class="login">
           <input type="text" class="input" placeholder="Your Name*" required>

           <input type="text" class="input" placeholder="Your Email*" required>
   </div>

   <div class="Subject">
       <input type="text" class="input" placeholder="Subject*" required>
   </div>

   <div class="msg">
    <input type="text" class="area" placeholder="Type Your Messege*" required>
</div>

<input type="submit" value="submit request">
</div>
</body>


</html>
<style>
    *{
  
  margin: 0;
  padding: 0px;
  font-family: 'Poppins', sans-serif;
}

.content-23{
  
  height: 44px;
  
  top: 531px;
  color: #151875;
  align-items: center;
  text-align: center;
}

.content p{
  width: 550px;
  height: 49px;
  left: 377px;
  top: 588px;
  color: #8A8FB9;
}
.dots{
  margin-top: 150px;
  margin-left: 100px;
  text-align: center;
  
} 
.dot1 {
  
  width: 25px;
  height: 25px;
  left: 455px;
  top: 707px;
  background-color:  #5625DF;;
  border-radius: 100%;
  display:inline-block;
  align-items: flex-start;
  
}
.dot2 {
  
  width: 25px;
  height: 25px;
  left: 455px;
  top: 707px;
  background-color:  #FF27B7;
  border-radius: 50%;
  display: inline-block;
  
}
.dot3 {
  
  width: 25px;
  height: 25px;
  left: 455px;
  top: 707px;
  background-color:  #37DAF3;
  border-radius: 50%;
  display: inline-block;
  
}
.contact-form2{
  
  height: 44px;
  margin-top: 90px;
  top: 531px;
  color: #151875;
  align-items: center;
  text-align: center;
  
 
 
}
.contact-form h1{
  width: 522px;
  height: 44px;
  left: 375px;
  top: 908px;
  font-size: 30px;
  line-height: 48px;
  color:#151875;
  margin-left: 100px;
}

.contact-form p{
  width: 550px;
  height: 49px;
  left: 377px;
  top: 972px;
  font-style: normal;
  font-weight: 600;
  font-size: 16px;
  line-height: 26px;
  color: #8A8FB9;
  margin-left: 100px;
  margin-top: 10px;

}

.Container{
  margin-top: 90px;
 align-items: center;
 margin-left: 90px;
 text-align: center;
}
.input{
  align-items: center;
  width: px;
  margin-right: 0px;
}
.input, .msg .area{
  width: 55%;
  padding: 20px;
  box-sizing: border-box;
  margin-bottom: 25px;
  border: 2px solid #e9eaea;
  font-size: 14px;
  border-radius: 5px;
  outline: none;
}



.login .input:last-child{
  margin-right: 0;
}

.msg .area{
  height: 200px;
  
}

.btn1{
  width: 250px;
  background: skyblue;  
  border-radius: 10px;
  height: 50px; 
  text-align: center;
  line-height: 50px;
  text-transform: uppercase;
  cursor: pointer;

}
.btn1 :hover{
    color: brown;
}
.input:focus

.msg .area:focus{
  border: 2px solid;
}
</style>
<br>

<?php
// include header.php file
include ('footer.php');
?>