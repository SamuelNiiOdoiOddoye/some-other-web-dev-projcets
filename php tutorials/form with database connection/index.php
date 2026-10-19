<html>

<head>
    <title>Sample Form Page
    </title>
</head>

<body>

    <div class="SignUp">
        <h3>
            This Is A Sample Form Page For Sign Up.
        </h3>

        <form action="includes/formhandler-inc.php" method="post">
            <input type="text" name="first_name" placeholder="First Name">
            <br>
            <input type="text" name="last_name" placeholder="Last Name">
            <br>
            <input type="text" name="other_names" placeholder="Other Names">
            <br>
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <input type="email" name="email" placeholder="E-mail">
            <br>
            <button>Sign Up</button>

        </form>
    </div>

    <div class="ChangeAccountDetails">
        <h3> This Is A Sample Change Account Details Page </h3>

        <form action="includes/userupdate-inc.php" method="post">
            <input type="text" name="username_to_update" placeholder="Enter your current username here">
            <br>
            <input type="password" name="pwd_to_update" placeholder="Enter your current password here">
            <br>
            <br><br>
            <input type="text" name="first_name" placeholder="Enter your updated first name">
            <br>
            <input type="text" name="last_name" placeholder="Enter your updated last name">
            <br>
            <input type="text" name="other_names" placeholder="Enter your updated other names here">
            <br>
            <input type="text" name="username" placeholder="Enter your updated username here">
            <br>
            <input type="password" name="pwd" placeholder="Enter your updated password here">
            <br>
            <input type="text" name="email" placeholder="Enter your updated email here">
            <br>
            <button>Update</button>
        </form>

    </div>

    <div class="DeleteAccount">

        <h3> This Is A Sample Delete Account Page</h3>

        <form action="includes/userdelete-inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button>Delete</button>
        </form>

    </div>

</body>

</html>