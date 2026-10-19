<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Test PHP Page</title>
</head>

<body>

    <!-- Variable Declaration and Data Types in PHP -->
    <?php
    echo "Hello, World!";

    //variable declaration in php
    $myFullName = "Samuel Nii Odoi Oddoye";
    echo $myFullName;

    //scalar data types in php
    $name = "Telix"; //this is a string type
    $int = 1234567890; //this is an integer type
    $float = 1.234567890; //this is a float type
    $bool_1 = false; //this is a boolean type with word declaration
    $bool_2 = 1; //this is a boolean type with integer declaration

    //array data type in php
    $array_1 = array("Samuel", "Nii", "Odoi", "Oddoye"); // this is array decalaration in php type 1
    $array_2 = ["De Youngsters International School", "Accra Academy", "Uni Of Ghana"]; // this is array decalaration in php type 2, this doesn't work for php versions beneath 5.0

    //object type in php
    /*
    $object_1 = new car();
    */
    // this is the object declaration in php

    // bleow are the default values of variables in php when not assigned any value it is adviced to assign them values to prevent errors
    $string_1 = ""; // the default values for strings in php
    $int_1 = 0; //the default value for integers in php
    $float_1 = 0; //the default value for float in php
    $bool_1 = false; //the default value for booleans in php is false (0)
    $array_0 = []; //the default value for arrays in php
    $object = null; // the default value for objects in php

    ?>

    <!-- a mix of HTML and PHP code-->
    <p>
        Hi, hello world my name is <?php echo $myFullName ?>
    </p>

    <!-- Super Global / Predefined variables -->
    <?php
    echo $_SERVER["DOCUMENT_ROOT"]; // shows the parent parent folder of the folder containing the code
    echo "<br>";
    echo $_SERVER["SERVER_NAME"]; // shows which type of server host it's in
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    ?>

    <!-- Test of Get Method -->
    <?php
    echo $_GET["name"]; //uses get method to return name inputed in url
    echo "<br>";
    echo $_REQUEST["name"]; //uses request to return name inputed in url
    echo "<br>";
    echo $_FILES["name"];
    echo "<br>";
    $_SESSION["username"] = "Oddoye";
    echo $_SESSION["username"];
    ?>

    <!-- Test Form -->
    <main>
        <form action="includes/formhandler.php" method="post">

            <label for="firstname">
                Firstname :
            </label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname...">
            <br><br>

            <label for="lastname">
                Lastname :
            </label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname...">
            <br><br>

            <label for="favouritepet">
                Favourite Pet :
            </label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">
                    None
                </option>
                <option value="Dog">
                    Dog
                </option>
                <option value="Cat">
                    Cat
                </option>
                <option value="Bird">
                    Bird
                </option>
            </select>
            <br><br>

            <button type="submit">
                submit
            </button>
            <br><br>
        </form>
    </main>

    <!-- String Operators in PHP -->
    <?php

    // string Operators
    echo "This is String Operators in PHP";
    echo "<br>";
    $VarA = "Hello, ";
    $VarB = "World!";
    $VarC = $VarA . $VarB; // concatenation of 2 strings
    echo $VarC;

    $VarD = $VarA . " " . $VarB . "My Name is " . $myFullName; // concatenation of multiple strings
    echo "<br>";
    echo $VarD;

    ?>

    <!-- Arithmetic Operators in PHP -->
    <?php
    // Arithmetic Operators
    echo "This is Arithmetic OPerators in PHP";
    echo "<br> <br>";
    echo 1 + 2; // addition operator
    echo "  This is the additon of 1 and 2";
    echo "<br><br>";
    echo 1 * 2;   // multiplication operator
    echo "  This is the multiplication of 1 and 2";
    echo "<br><br>";
    echo 2 / 1; // deivision operator
    echo "  This is the division of 2 by 1";
    echo "<br><br>";
    echo 2 - 1; // subtraction operator
    echo "  This is the subtraction of 1 from 2";
    echo "<br><br>";
    echo 10 % 3; // modulus operator ( prints the remainder of the division)
    echo "  This is the modulus of 10 and 3";
    echo "<br><br>";
    echo 10 ** 3; // does exponentiation (10 to the power of 3)
    echo "  This is the exponentiation of 10 to the power of 3";
    echo "<br><br>";
    echo "<br><br>";

    // Order of operations follows BODMAS/BIDMAS rules
    echo "PHP follows the BODMAS/BIDMAS rules";
    echo "<br><br>";
    echo (1 + 2) * 4; // prints 12 not 9
    echo "<br><br>";
    $TestVarA = 1;
    echo "<br>";
    echo $TestVarA;
    echo "<br>";
    $TestVarA += 2;
    echo $TestVarA;
    echo "<br>";
    $TestVarA -= 1;
    echo "<br>";
    $TestVarA *= 10;
    echo "<br>";
    $TestVarA /= 5;
    echo "<br>";
    echo $TestVarA;
    echo "<br><br>";

    ?>

    <!-- Logical Operators in PHP -->
    <?php
    echo "This is the Logical Operators in PHP";
    echo "<br><br>";
    //Logical Operators
    $TestVariable1 = 1;
    $TestVariable2 = 0;
    $TestVariable0 = $TestVariable1 + $TestVariable2;
    echo $TestVariable0;
    echo "<br><br>";

    // Testing if 2 variables have the same assigned value
    echo "Testing if 2 variables have the same assigned value";
    echo "<br>";
    if ($TestVariable1 == $TestVariable0) {
        echo "Both Variables are equal";
    } else {
        echo "Both Variables are not equal";
    }
    echo "<br><br>";

    // Testing if 2 variables are of the same data type and value
    echo "Testing if 2 variables are of the same data type and value";
    echo "<br>";
    if ($TestVariable0 === $TestVariable1) {
        echo "Both variables are of the same data type and value";
    } else {
        echo "Both variables are not of the same data type and value";
    }
    echo "<br><br>";

    //Testing the and logical operator in PHP
    echo "Testing the AND logical operator in PHP";
    echo "<br>";
    if ($TestVariable1 == 1 && $TestVariable2 == 0) {
        echo "Both conditions are true";
    } else {
        echo "One of the conditions is false";
    }
    echo "<br><br>";

    // Testing the or logical operator in PHP
    echo "Testing the OR logical operator in PHP";
    echo "<br>";
    if ($TestVariable1 != $TestVariable2 || $TestVariable1 == $TestVariable2) {
        echo "At least one of the conditions is true";
    } else {
        echo "Both conditions are false";
    }
    echo "<br><br>";

    // Testing compound logical operators in PHP
    echo  "Testing compound logical operators in PHP";
    echo "<br>";
    if (($TestVariable1 != $TestVariable2 && $TestVariable2 != $TestVariable0) || ($TestVariable1 == $TestVariable0 || $TestVariable2 == $TestVariable0)) {
        echo "At lease one of the sub conditions is true";
    } else {
        echo "Both sub conditions are false";
    }
    echo "<br><br>";

    ?>

    <!-- Icrementation and Decrementation of Operators in PHP -->
    <?php
    // Pre-Incrementation and Pre-Decrementation of Operators
    echo "This is the Incrementation and Decrementation of Operators in PHP";
    echo "<br>";
    $A = 5;
    echo ++$A; // pre-incrementation
    echo "<br>";
    echo "pre-incrementation adds 1 to the value before using it";
    echo "<br><br>";

    echo --$A; // pre-decrementation
    echo "<br>";
    echo "pre-decrementation subtracts 1 from the value before using it";
    echo "<br><br>";

    // Post-Incrementation and Post-Decrementation of Operators
    echo "This is the Post-Incrementation and Post-Decrementation of Operators in PHP";
    echo "<br>";
    $B = 10;
    echo $B++; // post-incrementation
    echo "<br>";
    echo $B++; // to show the effect of post-incrementation
    echo " post-incrementation adds 1 to the value after using it";
    echo "<br><br>";

    echo $B--; // post-decrementation
    echo "<br>";
    echo $B--; // to show the effect of post-decrementation
    echo "post-decrementation subtracts 1 from the value after using it";
    echo "<br><br>";
    ?>

</body>

</html>