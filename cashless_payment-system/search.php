<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db = "test";
          $id=-1;
          if ($_SERVER["REQUEST_METHOD"] == "GET") 
          {
              $id = test_input($_GET["id"]);
          }
          function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
          
          $conn = new mysqli($servername, $username, $password,$db);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

        




          $sql = "SELECT id, name, balance FROM user WHERE idid"; //++++++++++++++++( actually used for transaction showing)++++++++++
          
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row until end ______________(yo chai transaction history dekhauna use hunxa)_______________
            while($row = $result->fetch_assoc()) {
              echo $row["balance"];
            
            }
          } else {
            echo -1;
          }
  
            
  ?>         