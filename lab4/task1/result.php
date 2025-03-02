<h1>User Information</h1>
<hr />

<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password']; // Normally, passwords should be hashed.

    echo "<strong>Name:</strong> $name";
    echo "\n <hr /> \n";
    echo "<strong>Email:</strong> $email";
    echo "\n <hr /> \n";
?>
