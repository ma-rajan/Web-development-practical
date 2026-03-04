<?php
// Create Cookie
if(isset($_POST['create'])) {
    setcookie("username", $_POST['username'], time()+3600);
    setcookie("password", $_POST['password'], time()+3600);
    echo "Cookies Created Successfully<br>";
}

// Delete Cookie
if(isset($_POST['delete'])) {
    setcookie("username", "", time()-3600);
    setcookie("password", "", time()-3600);
    echo "Cookies Deleted Successfully<br>";
}
?>

<html>
<head>
    <title>Cookie testing</title>
</head>
<body>

<h2>Cookie Program </h2>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="create" value="Create Cookie">
    <input type="submit" name="show" value="Show Cookie">
    <input type="submit" name="delete" value="Delete Cookie">
</form>

<br>

<?php
// Show Cookie
if(isset($_POST['show'])) {
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        echo "Username: " . $_COOKIE['username'] . "<br>";
        echo "Password: " . $_COOKIE['password'];
    } else {
        echo "No Cookies Found!";
    }
}
?>

</body>
</html>