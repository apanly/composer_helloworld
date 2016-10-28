<?php
require(__DIR__ . '/vendor/autoload.php');
$ua = "Mozilla/5.0 (Linux; Android 5.1.1; MZ-MX4 Pro Build/LMY48W) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/45.0.2454.94 Mobile Safari/537.36";
$target_browser = new apanly\BrowserDetector\Browser( $ua );
echo $target_browser->getName()."\r\n";

$target_os = new apanly\BrowserDetector\Os( $ua  );
echo $target_os->getName()."\r\n";

$target_device = new apanly\BrowserDetector\Device( $ua  );
echo $target_device->getName()."\r\n";








