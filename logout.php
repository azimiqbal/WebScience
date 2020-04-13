<?php
session_start();
session_destroy();
// Redirect:
header('Location: index2.php');
