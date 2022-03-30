<?php
// include header.php file
include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">



<body>
    
    
        <div class="main">
            <div class="left">
                <img src="assets/products/main.png" >
            </div>
           
           <div class="right">
               <h1>Know About Our EcomerceBusiness, History</h1>
             <br>
              <p>
            
              </p>
              <br>
            
              <a href="contactus.php" class="btn"><h4>Contact Us</h4> </a>
              </div>
              
            
            
        </div>
    
    <div class="text">
        <h1> Our Features!</h1>
    </div>
    <div class="offer">
        <div class="offer-col">
            <img src="assets/products/free-delivery 1.png" alt="">
            <h3>24/7 Support</h3><br>
            <p>Customer service strategy that involves providing support 24 hours a day and 7 days a week..</p>
        </div>
        <div class="offer-col">
            <img src="assets/products/cashback 1.png" alt="">
            <h3>100% Purchase Protection</h3><br>
            <p>We are committed to ensure 100% <br>Purchase Protection for customers <br> by offering genuine products, secure payments and easy returns for items shopped on Primespot.in. </p>
        </div>
        <div class="offer-col">
            <img src="assets/products/premium-quality 1.png" alt="" >
            <h3 >Quality Product</h3><br>
            <p>Product quality means to incorporate <br> features  that have a capacity to meet consumer needs (wants) and gives customer satisfaction by<br> improving products (goods) and making them free from any deficiencies or defects.</p>
        </div>
       
    </div>
</body>


</html>

<style>
   

*{
    margin: 0;  
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 1170px;
    margin: auto;
}
.row{
    display: flex;
    flex-wrap: wrap;
}
ul{
    list-style: none;
}
.footer{
    background-color: #24262b;
    padding: 40px 0;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
    
}
.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: 3e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px 
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}
.footer-colul li a:hover{
    color: #ffffff;
    padding-left: 10px;
}
.footer-col .social-links a{
    display:inline-block;
    height: 50px;
    width: 50px;
    align-content: center;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    line-height: 50px;
    border-radius: 50%;
    color: #ffffff;
    transform: all 0.3s ease;
}
.footer-col .social-links a{
    align-content: center;
}
.footer-col .social-links a:hover{
    
    color: #24262b;
    background-color: #ffffff;
}
.flex-container {
    display: flex;
    align-items: stretch;
    background-color: white;
  }
  
  .flex-container > div {
    
    color: white;
    margin: 10px;
    text-align: center;
    line-height: 75px;
    font-size: 30px;
  }
  .flex-container > div li{
    
        flex: 2;
        display: inline-block;
        align-content: center;
        padding:  10px;
  }
  .flex-container > div .logo{
      align-content:center;
      margin-top: 10px;
  }

  .col-4 .icon-bar {

    width: 90px;
    background-color:white;
  }
  .offer{
    padding: 30px 10px 50px 10px;
    display: inline-flex;
    color :blue;
}
.offer-col{
    margin: 10px 10px 10px 10px;
    padding: 10px 50px 10px 50px;
    box-shadow: 0px 8px 40px rgba(49, 32, 138, 0.05);
    
}
.text{
    
    text-align: center;
}
.main {
    display: flex;
    
    align-items: center;
}
.main .right{
    padding: 100px;
}
.main .left{
    padding: 80px;
}
.main .about-text {
    text-align: right;
    padding-left: 150px;
    padding-right: 50px;
    
    
}
.btn{
  
   
    padding: 8px 20px;
    border-radius: 2px;
   
    letter-spacing: 0px;
 
    font-weight: 900;

}
.btn:hover {
  background-color: #008CBA;
  color: white;
}
</style>
<?php
// include header.php file
include ('footer.php');
?>