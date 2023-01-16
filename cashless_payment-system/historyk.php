<?php
      session_start();
      echo $_SESSION["username"];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer history</title>
    <!-- <link rel="stylesheet" href="stylesheet.css"> -->
    <style>
    *{
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
}

body{
    background-color: #e6dff5;
    color: white;
}
.header{
    border: 1px solid #3f286b;
    background-color: #3f286b;
    width: 100%;
    padding: 20px;
}
h1{
    font-family: cursive;
    font-size: 30px;
    padding: 10px;
    text-align: center;
}
h2{
    padding: 2px;
    text-align: center;
}
h3{
    padding-top: 15px;
    text-align: center;
    font-size: 25px;
}
p{
    padding: 20px;
    text-align: center;
}
.heading{
    text-align: center;
    /* width: 220px; */
    /* /* margin: auto; */
}
.mainsectiion {
    height: 606px;
}
.card {
    color: white;
    width: 23%;
    height: 200px;
    padding: 70px;
    border-radius: 20px;
    background-color: #3f286b;
    background-image: url("../image/card.png");
    box-shadow: 1px 15px 18px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-decoration: none;
    float: left;
    margin-top: 11%;
    margin-left: 5%;
}
a:hover {
    width: 24%;
    height: 210px;
    transition: 0.6s ease;
}
.aside {
    width: 40%;
    /* border: 2px solid #3f286b; */
    background-color: #3f286b;
    box-shadow: 1px 15px 18px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 20px;
    margin-top: 7%;
    margin-right: 4%;
    float: right;
    padding: 20px;
}
.searchbar {
    padding: 4px;
    left: 25%;
    width: 40%;
    margin: 0 auto;
}
.separate{
    border-radius: 25   px;
}
.footer {
    border: 2px solid #3f286b;
    background-color: #3f286b;
    margin-top: 630px;
    width: 100%;
    /* align-items: flex-end; */
    clear: both;
}
table { 
    border-collapse: separate;
    border-spacing: 0px 15px;
    margin: 0%;
    width: 100%;
    float: right;
}
thead tr {
    border: 2px solid  rgb(101, 73, 191);
    background-color: rgb(101, 73, 191);
}
/* tr:nth-child(odd){background-color: #af8cef;}
tr:nth-child(even){background-color: #8c6dc5;} */
tr {
    border-bottom: 1px solid  rgb(101, 73, 191);
    background-color: rgb(101, 73, 191);
}
a.separate:hover {
    width: 10%;
    height: 15%;
}
th {
    background-color: #7c47dd;
     padding: 10px;
     text-align: left;
     padding-left:0px;
     /* border-radius: 5px; */
}</style>


</head>

<body>
    <div class="header">
        <h1>PayCard</h1>
    </div>
    <div class="mainsection">
    <?php
                            
                           
                            $uName = $_SESSION['username'];
                            
                               
                           
                            //server ra database connect garna vaiables ma rakheko
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $db = "cashless payment system";  //database name
                            $name=5;
                            $compare = "customer";
                            //$sql ="SELECT id,  transaction_amount, balance, date FROM nothing1  ";
                            






                            
                        if(isset($_SESSION['username'])){     
                            if ($_SESSION['username']=="user1")
                            {
                               
                               $sql  = "SELECT id, transaction_amount, balance FROM shopkeeper   ORDER BY id DESC LIMIT 1"; 
                                echo "ifcondition";
                            }
                            else 
                            {
                                $sql  = "SELECT id, transaction_amount, balance FROM customer ORDER BY id DESC LIMIT 1"; 
                               //echo "elseCondition";
                            }
                         
                        }      



                         

                            //creates connection to database
                            $conn = new mysqli($servername, $username, $password,$db);
                            // Checks connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }

                             //selects table named customer from database and saves it to $sql variable
                            //++++++++++++++++( actually used for transaction showing)++++++++++
                            //runs mathi ko $sql
                            $result = $conn->query($sql);
                            
            
                            //yesle chai last ko row select garxa. latest balance dekhauna yesto gareko
                           // $sql = "SELECT id, transaction_amount, balance FROM customer ORDER BY id DESC LIMIT 1"; 

                            //feri mathi jstai run gareko
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            if ($result->num_rows > 0) {
                            //final balance print garna. tyo mathi dekhaune wala
                                echo"<a href='#' class='card'><div class='heading'><h2>Avilable Balance: </h2>"."<h2>Rs.".number_format($row["balance"], 2  , ".", ",")."</h2></div></a>";
                            }
                            else {
                            echo "0 results";
                            }  
            ?>


        <div class="aside">
            <h3>Transaction History</h3>
            <div class="searchbar">
            <form method="post" name ="noOfTrans" id ="noOfTrans" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

                No. of transactions: <input type="number" name="name" value = "<?php echo $name?>">
                <input type="submit" name="submit" value="Submit"> </div>

            </form> 
            
            <table width="404">
                <thead>
                    <tr>
                        <th width="65">ID</th>
                        <th width="109">Debit Amount</th>
                        <th width="106">Balance</th>
                        <th width="124">Time</th>
                    </tr>
                </thead>
                <tbody>
        <?php
        
            //server ra database connect garna vaiables ma rakheko
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "cashless payment system";  //database name
            $name=5;
            $uname="";
            $password ="";
                                
            //yesle chai arduino bata deko transaction amount linxa
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $name = test_input($_POST["name"]);
            }
          

            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

            //creates connection to database
            $conn = new mysqli($servername, $username, $password,$db);
            // Checks connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

          

            


            //selects table named customer from database and saves it to $sql variable
            $sql = "SELECT id,  transaction_amount, balance, DATE_FORMAT(date_time, '%Y-%m-%d') DATEONLY, DATE_FORMAT(date_time,'%H:%i:%s') TIMEONLY FROM customer ORDER BY id DESC LIMIT $name"; //++++++++++++++++( actually used for transaction showing)++++++++++
            //runs mathi ko $sql
            $result = $conn->query($sql);

            
            if ($result->num_rows > 0) {
              
              // every row lai herna yesto gareko
              while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>"."Rs.  ".number_format($row["transaction_amount"], 2  , ".", ",")."</td>
                        <td>" ."Rs.  ".number_format($row["balance"], 2  , ".", ",")."</td>
                        <td>" .$row["DATEONLY"]. "<br>".$row["TIMEONLY"]."</td>
                        
                      </tr>";
                      
              }
            } else {
              echo "0 results";
            }
            
            
            
        ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <p> &copy; 2022 PayCard Inc. &#8482;  Kathmandu, Nepal. All Rights Reserved.</p>
    </div>
    
</body>

</html>