<?php

$username = $_POST['Panda'];
$password = $_POST['Hub'];

if ($username == "myusername" && $password == "mypassword") {
    echo "Success";
} else {
    echo "Invalid credentials";
}

