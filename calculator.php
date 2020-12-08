
<p> <h1>calculator</h1></p>

  <form action="calculator.php" method="post">
    Number1:<input type="number" name="num1"> <br>
    Calculate:<input type="text" name="op"><br>
    Number2<input type="number" name="num2">

          <input type="submit">
      <br></br>
          <?php

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];
            if($op == "+") {
              echo $num1 + $num2;
            } elseif ($op == "*") {
              echo $num1 * $num2;// code...
            }elseif ($op == "-") {
              echo $num1 - $num2;// code...
            }elseif ($op == "/") {
                echo $num1 / $num2;// code...
            }elseif ($op == "%") {
                echo $num1 % $num2;// code...
            }
            else {
              echo "Err, Invalid Operator";
            }

          ?>
