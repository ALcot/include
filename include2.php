<?php
include("funcs.php");

// $s ='<script>alert("XSS");</script>';
// echo $s;

$s ='<script>alert("XSS");</script>';
echo h($s);


?>