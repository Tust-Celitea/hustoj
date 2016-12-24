<html>
    <head>
    </head>
    <body>
    <h1>Hi <?php echo "Xiaoming"  ?> , you are <?php  echo "19" ?> years old! It is my index page!</h1>
    <form method="post" action="louzhiming.php">
        <input type="text" name="name"></input>
        <input type="text" name="password"></input>
        <input type="submit"></input>
    </form>
    </body>
</html>

<?php 
if($_POST["name"] == "lou" && $_POST["password"] == "123") {
    echo "login successfully";
}
else {
    echo "login failed";
}
?>
