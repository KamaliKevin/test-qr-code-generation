<?php
    require "process.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generation</title>
</head>
<body>
<h1>QR Code Generation</h1>
<p>The following QR code should redirect you to the official Google's search engine:</p>
<?php createShowQRCode("https://www.google.com/", "Google Search Engine"); ?>
</body>
</html>

