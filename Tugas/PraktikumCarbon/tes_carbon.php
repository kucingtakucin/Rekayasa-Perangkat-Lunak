<?php
require_once "vendor/autoload.php";

use Carbon\Carbon;

$sekarang = Carbon::now();
echo "Sekarang: $sekarang\n";
echo "Umur saya: " . Carbon::createFromDate(2002,7, 20)->age . "\n";
echo "Besok: {$sekarang->addDay()} \n";

