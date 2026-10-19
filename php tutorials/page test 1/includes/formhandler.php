<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]); // takes data and converts it into html entities so the user can't enter code in the input to harm our code
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    //php code to solution to make a field required
    if (empty($firstname)) {
        exit();
        header("Location:../index.php");
    }

    // to echo the data just inputed by the user
    echo "These are the data that the user submitted: ";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    // send the user back to the front page
    header("Location: ../index.php");
}
// when the condition turns to be false return the user to the main page this is to prevent illegal access
else {
    header("Location: ../index.php");
}
