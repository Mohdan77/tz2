<?php

require_once(__DIR__ . '/vendor/autoload.php');




//$introvert->getLeadDateJ();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="assets/styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
</head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="assets/glDatePicker.min.js"></script>
<script src="assets/glDatePicker.js"></script>
<script src="assets/main.js"></script>

<input type="text" id="mydate" gldp-id="mydate" />
<div gldp-el="mydate"
     style="width:400px; height:300px; position:absolute; top:70px; left:100px;">
</div>



</body>
</html>


