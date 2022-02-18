<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <title>Login page</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
      body{
        font-family: 'Poppins', sans-serif;
        height: 100vh;
display: flex;
justify-content: center;
align-items: center;
background: lightgrey /*#8dabc2*/;
      }
      input{
        background-color:white;
        border: 1px solid grey;
      }
      .form{
font-weight: "Poppins", sans-serif;
position: absolute;
width: 350px;
text-align: center;
}
.form i{
color: black /*#ccc*/;
font-size: 65px;
margin-bottom: 30px;
}

.form .signup-form{
display:none;
}

.form .user-input{

width:320px;
height: 40px;
margin-bottom: 15px;
margin-bottom: 10px;
outline: none;
background: none;
background: rgba(255, 255, 255, 0.2);
color:black;
font-size: 18px;
text-align: center;
border-radius: 5px;
/* transition: 0.5s;
transition-property: border-left, border-right, box-shadow; */
}

.form .user-input .active{
	border: 1px solid black;
}



.form .options-01{
margin-bottom: 50px;
}

.form .option-01 input{
width: 15px;
height: 15px;
margin-right: 5px;
}

.form .options-01 .remember-me{
font-size: 14px;
display: flex;
align-items: center;
float: left;
cursor: pointer;
}

.form .options-01 a{
color:black;
font-size: 14px;
font-style: italic;
float:right;
}

.form .btn{
outline: none;
outline: none;
width: 320px;
height: 55px;
background: #409ce3;
color: #fff;
font-size: 18px;
letter-spacing: 1px;
border-radius: 5px;
cursor:pointer;
/* transition: 0.5s;
transition-property: border-left, border-right, box-shadow; */
}


.form .options-02{
font-size: 14px;
margin-top: 30px;
}

.form .option-02 a{
color: #0f12ba;
}
.allinp{
  margin-top:30px;
}

@media screen and (max-width: 500px){
.form{
width: 95%;
}
.form .user-input{
width: 100%;
}
.form .btn{
width: 100%;
}
}
:placeholder-shown{
  font-family: 'Poppins', sans-serif;
}
    </style>
  </head>
  <body>

  
    <div class="form">
      <form class="login-form" action="validation.php" method="post" style="background-color:white;">
       <div class="login" style="width:330px; height:60px;  background-color: #225470; padding:10px;">
         <h1 style="color:white; font-weight:200; position:relative;top:-16px;">Login</h1>
       </div>
       <br>
        <input class="user-input active" type="text" name="user" placeholder="Username*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
        <input class="user-input active" type="password" name="password" placeholder="Password*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
        
        <input class="btn" type="submit" name="" value="LOGIN" style='background-color: #225470; margin-top:30px;'>
        <div class="options-02" style="margin-top:50px; margin-bottom;20px; padding-bottom:20px;">
          <p>Not Registered ? <a href="#"> Create an account </a></p>
        </div>
      </form>

      <form class="signup-form" action="regis.php" method="post" style="background-color:white;">
      <div class="login" style="width:330px; height:60px;  background-color: #225470; padding:10px;">
         <h1 style="color:white; font-weight:200; position:relative;top:-16px;">Sign Up</h1>
       </div>
       <div class="allinp">

       <input class="user-input" type="text" name="user" placeholder="Username*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
         <input class="user-input" type="email" name="email" placeholder="Email address*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
          <input class="user-input" type="password" name="password" placeholder="Password*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
           <input class="user-input" type="password" name="cpassword" placeholder="Confirm password*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
           <input class="user-input" type="text" name="name" placeholder="Student name*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
           <input class="user-input" type="text" name="no" placeholder="Contact no*" required style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
           <input class="user-input" type="text" name="an_no" placeholder="Another contact no" style="border:1px solid #ececec; width:300px; background:#ececec; border-radius:20px;">
           
          <input class="btn"  type="submit" name="register" value="SIGN UP" style='background-color: #225470; margin-top:30px;'>
       </div>
      
          <div class="options-02" style="margin-top:50px; margin-bottom;20px; padding-bottom:20px;">
            <p>Already Registered ? <a href="#">Sign In</a></p>
          </div>
      </form>
    
      <a href="index.php " style="color: black;">return home page</a>
    </div>
 

    <script type="text/javascript">
      $('.options-02 a').click(function(){
        $('form').animate({
        height:"toggle", opacity:"toggle"
        }, "slow");
      });
    </script>

   


    
  </body>
</html>