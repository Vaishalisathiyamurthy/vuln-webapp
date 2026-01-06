<?php
include "db.php";
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Login Successful</h3>";
    } else {
        echo "<h3>Login Failed</h3>";
    }
}
?>
