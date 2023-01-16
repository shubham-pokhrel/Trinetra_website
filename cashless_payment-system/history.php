<!DOCTYPE HTML>  
<html>

<!--
    <style></style> vitra lekhe pani hunxa hai css code 
    ani  tala ko code ma table th td tmlai tha hola
    ani line 98 ma <h1> lai end(</h1>) gareko xaina tyo chai amount lai thulo parna jugad ho hai testai ho
    -->
<head>
<style>
    /*table lai ali ramro dekhauna gareko. ramro gara yeslai */
    table {
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      
    }
   
    
</style>
</head>
<body>  
<?php
    
?>
<table class ="table">
  <thead>
    <tr>
      <th>Id</th>
      <th style="width:30%">Debit Amount</th>
      <th style="width:30%">Balance</th>
      <th>Date & time</th>
    </tr>
  </thead>
  <tbody>
  <?php
            //server ra database connect garna vaiables ma rakheko
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "cashless payment system";  //database name
            $name=3;

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
            //yesle chai last ko row select garxa. latest balance dekhauna yesto gareko
            $sql = "SELECT id, transaction_amount, balance FROM customer ORDER BY id DESC LIMIT 1"; 

            //feri mathi jstai run gareko
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if ($result->num_rows > 0) {
              //final balance print garna. tyo mathi dekhaune wala
                echo"<h2>Available Balance: </h2>"."<h2>Rs. ".number_format($row["balance"], 2  , ".", ",")."</h2>";
            }
            else {
              echo "0 results";
            }
            
            
  ?>         
  </tbody>
</table>
 <br>
<!-- yo ta html codes vaihalyo table ko lai -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
 
  No. of transactions: <input type="number" name="name" value = "<?php echo $name?>">
  <input type="submit" name="submit" value="Submit"> 

</form>



</body>
</html>