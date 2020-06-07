<?php
session_start();

if(!isset($_SESSION['email'])){
  header("Location: login.php?error=Por favor faça o login");
}