<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>
        My Php Calculator App
    </title>
</head>

<body class="body">
    <div class="formBackground">
        <?php

        // This code is for a calculator using only php
        echo "Hello world this is my php calculator app";
        echo "<br>";
        echo " First Number" . " Operator" . " Second Number";
        echo "<br><br>";

        // Initializing the variables
        $Result = 0;
        ?>

        <!--This is the code for the form portion -->
        <main>
            <form action="includes/formhandler.php" method="post">

                <!--Section For Handling The First Number -->
                <label for="FirstVariable">
                    First Number :
                </label>
                <input id="FirstVariable" type="number" name="firstnumber" placeholder="First Number..." required oninvalid="this.setCustomValidity('Please enter the first number to be calculated')" oninput="this.setCustomValidity('')">
                <br><br>

                <!-- Section For Handling The Operator -->
                <label for="Operator">
                    Operator :
                </label>
                <input id="Operator" type="text" name="operator" placeholder="What Operator..." required oninvalid="this.setCustomValidity('Please enter the operation to be done')" oninput="this.setCustomValidity('')">
                <br><br>

                <!-- Section For Handling The Second Number -->
                <label for="SecondVariable">
                    Second Number :
                </label>
                <input id="SecondVariable" type="number" name="secondnumber" placeholder="Second Number.." required oninvalid="this.setCustomValidity('Please enter the second number to be calculated')" oninput="this.setCustomValidity('')">
                <br>

                <!-- The submit Button Portion -->
                <button type="submit">
                    submit
                </button>
            </form>
        </main>

        <!-- This is the result displaying portion -->
        <?php
        echo "<br><br>";
        echo "Your Result is " . $Result;

        ?>
    </div>

</body>

</html>