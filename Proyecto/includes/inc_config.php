<?php
session_start();
$token = "98fee347b91da83932ea8b9daa0edece";

if (isset($_SESSION['logeado']) && $_SESSION['logeado'] == TRUE) {
	$logeado = TRUE;
} else {
	$logeado = FALSE;
}?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="icon" href="https://img.icons8.com/pastel-glyph/344/movie-beginning.png">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>