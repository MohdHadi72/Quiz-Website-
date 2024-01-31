<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

$con = mysqli_connect('localhost', 'root', '', 'quizdb') or die("Couldn't Connected");

if (isset($_POST['submit'])) {
    if (!empty($_POST['quizCheck'])) {
        $count = count($_POST['quizCheck']);

        echo "Out Of 5 Questions But ", "You Have Select " . $count . " Options ";
    }
}
