<?php
      session_start();
    ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PayCard's Webpage</title>
    <link rel="stylesheet" href="style.css">
        <style>
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
          }
            body{
                margin: 0;
                padding: 0;
                background-color: #3f286b;
                height: 100vh;
                width: 100%;
                color: #e6dff5
                overflow: hidden;
              }
            .loginbox{
                /* opacity: 0.2; */
                position: absolute;
                padding-bottom: 2%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 28%;
                background: #f1edfa;
                border-radius: 30px;
                box-shadow: 8px 8px 30px 11px rgba(0, 0, 0, 0.2), 4px 20px 20px 5px rgba(0, 0, 0, 0.2);
              }
            .loginbox h1{
                font-family: cursive;
                text-align: center;
                padding: 20px 0;
                margin-left: 8%;
                margin-right: 8%;
                display: block;
                color: #3f286b;
                border-bottom: 1px solid#3f286b
              }
            .loginbox form{
                padding: 0 40px;
                box-sizing: border-box;
              }
            form .fill{
                position: relative;
                border-bottom: 2px solid #957ec0;
                margin: 30px 0;
              }
            .fill input{
                width: 100%;
                padding: 0 5px;
                height: 40px;
                font-size: 16px;
                border: none;
                background: none;
                outline: none;
              }
            .fill label{
                position: absolute;
                top: 50%;
                left: 5px;
                color: #957ec0;
                transform: translateY(-50%);
                font-size: 16px;
                pointer-events: none;
                transition: .5s;
              }
            .fill span::before{
              content: '';
              position: absolute;
              top: 40px;
              left: 0;
              width: 0%;
              height: 2px;
              background: #3f286b;
              transition: .5s;
            }
            .fill input:focus ~ label,
            .fill input:valid ~ label{
                top: -5px;
                color: #3f286b;
            }
            .fill input:focus ~ span::before,
            .fill input:valid ~ span::before{
                  width: 100%;
            }
            .pass{
                margin: -5px 0 20px 5px;
                color: #957ec0;
                cursor: pointer;
            }
            .pass:hover{
                  text-decoration: underline;
            }
            input[type="submit"]{
                width: 100%;
                height: 50px;
                border: 1px solid;
                background: #3f286b;
                border-radius: 25px;
                font-size: 18px;
                color: #e6dff5;
                font-weight: 700;
                cursor: pointer;
                outline: none;
            }
            input[type="submit"]:hover{
                border-color: #3f286b;
                transition: .5s;
            }
            .footer{
                display: inline-block;
                position: absolute;
                top: 69%;
                width: 99%;
                text-align: center;
                text-decoration: none;
            }
            a:hover{
                  color: #d3c0f7;
            }
            .p {
                text-decoration: none;
                color: white;
            }
          #p2 {
            margin-left: 10px;
          }

    </style>
  </head>
  <body>
    
    <div class="loginbox">
      <h1>PayCard</h1>
      <form method="post" action ="historyk.php">
        <div class="fill">
          <input type="text" name = "uname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="fill">
          <input type="password" name ="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="footer">
      <a href="#" class="p">Privacy Policy</a>
      <a href="#" class="p" id="p2">Terms of Use</a>
    </div>
    <?php
        $uname = "";
        $pass = "";
       
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $uname = test_input($_POST["uname"]);
        $pass = test_input($_POST["password"]);
    }
   
    
    $_SESSION['username'] = $uname;
    $_SESSION['password'] = $pass;
        

        
      
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          
        echo $_SESSION['username'] = $uname;
   


    ?>

  </body>
</html>
