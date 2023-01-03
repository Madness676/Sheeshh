<?php

$password = $_POST['Panda'];

if ($password == "mypassword") {
    echo "Success";
} else {
    echo "Invalid credentials";
}
