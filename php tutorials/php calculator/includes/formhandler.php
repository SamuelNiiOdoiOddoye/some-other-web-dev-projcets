<?php

// Data Security
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $FirstVariable = filter_input(INPUT_POST, "firstnumber", FILTER_SANITIZE_NUMBER_FLOAT); //takes data and converts it into html entities so the user can't enter code into the input form to harm the code
    $Operator = htmlspecialchars($_POST["operator"]); //takes data and converts it into html entities so the user can't enter code into the input form to harm the code
    $SecondVariable = filter_input(type: INPUT_POST,  var_name: "secondnumber", filter: FILTER_SANITIZE_NUMBER_FLOAT); //takes data and converts it to html entities so the user cannot enter code into the input form to harm the code 

    //php code to make the fields required
    if (empty($FirstVariable) ||  empty($Operator) || empty($SecondVariable)) {
        header("Location: ../index.php?error=empty_fields");
        exit();
    }
}

// handling the data entered by the user
echo "The First Number is : " . $FirstVariable;
echo "<br>";
echo "The Operator is : " . $Operator;
echo "<br>";
echo "The Second Number is : " . $SecondVariable;
echo "<br>";
echo "<br><br>";

//the calculation logic is here
switch ($Operator) {
    case "+":
    case "plus":
    case "add":
        echo "An Addition Operation is to be carried out.";
        echo "<br>";
        $Result = $FirstVariable + $SecondVariable;
        echo "The Result is : " . $Result;
        break;

    case "-":
    case "minus":
    case "Minus":
    case "subtract":
    case "Subtract":
        echo "A Subtraction Operation is to be carried out.";
        echo "<br>";
        $Result = $FirstVariable - $SecondVariable;
        echo "The Result is : " . $Result;
        break;

    case "*":
    case "x":
    case "X":
        echo "A Multiplaction Operation would be carried out.";
        echo "<br>";
        $Result = $FirstVariable * $SecondVariable;
        echo "The Result is : " . $Result;
        break;

    case "/":
    case "÷":
    case "divide":
    case "Divide":
    case "DIVIDE":
        echo "A Division Operation would be carried out.";
        echo "<br>";
        $Result = $FirstVariable / $SecondVariable;
        echo "The Result is : " . $Result;
        break;

    case "%":
        echo "A Modulus Operation would be carried out.";
        echo "<br>";
        $Result = $FirstVariable % $SecondVariable;
        echo "The Result is : " . $Result;
        break;

    case "**":
        echo "An exponentiation Operation would be carried out.";
        echo "<br>";
        $Result = $FirstVariable ** $SecondVariable;
        echo "The Result is : " . $Result;
        break;
}
