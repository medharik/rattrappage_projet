<?php

session_start();
unset($_SESSION['panier']);

header("location:index.php");
