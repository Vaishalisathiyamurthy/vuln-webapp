<?php
include "db.php";
?>

<form method="post">
    Enter Username:
    <input type="text" name="username">
    <input type="submit" name="recover" value="Recover Password">
</form>

<?php
if (isset($_POST['recover'])) {
    $user = $_POST['username'];

    $query = "SELECT password FROM users WHERE username='$user'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Your password is: ".$row['password']."</h3>";
    } else {
        echo "<h3>User not found</h3>";
    }
}
?>
