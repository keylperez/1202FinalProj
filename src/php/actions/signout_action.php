<?php
session_start();
session_destroy(); //destroy entire session 
header("Location: ../../../index.php");
