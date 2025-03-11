<?php

echo date("F");

echo "<hr>";

echo "detik saat ini <br>";
echo time();
echo "<br>";
echo "detik 1 hari dari sekarang";
echo "<br>";
echo time() + 60 * 60 *24;
echo "<hr>";

echo "hari ini:";
echo date("l");
echo "<br>";
echo "100 hari dari sekarang hari: ";
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<hr>";

echo date("l",mktime(10, 0, 0, 12, 15, 2005));