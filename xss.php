<form method="GET">
    Enter name: <input type="text" name="name">
    <input type="submit">
</form>

<?php
if(isset($_GET['name'])) {
    echo "Hello " . $_GET['name'];
}
?>
