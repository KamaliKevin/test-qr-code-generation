<?php

// QR Code Library necessary files (Info: https://github.com/chillerlan/php-qrcode):
use chillerlan\QRCode\QRCode;

require "vendor/autoload.php";

// CUSTOM FUNCTIONS:
/**
 * Creates and shows immediately a QR Code in the current page
 *
 * @param $data - The data to be converted into a QR Code
 * @param string $alt - Text to be shown if the QR Code could not be generated
 * @return void
 */
function createShowQRCode($data, string $alt): void
{
    // Generate and show the QR Code:
    echo "<img src='".(new QRCode)->render($data)."' alt='".$alt."'/>";
}
