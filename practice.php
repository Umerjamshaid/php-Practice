<?php
// This is a single-line comment

/*
This is a multi-line comment
*/

// PHP code starts with <?php and ends with ?--->
echo "Hello, World!";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <script src="https://unpkg.com/htmx.org@2.0.4"></script>
  <!-- have a button POST a click via AJAX -->
  <button hx-post="/clicked" hx-swap="outerHTML">
    Click Me
  </button>
</body>
</html>



