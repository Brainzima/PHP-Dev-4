<?php
echo pi();
echo "<br>";
echo floor(56.55);
echo "<br>";
echo ceil(56.55);
echo "<br>";
echo round(56.55);
echo "<br>";
echo rand(100000, 999999);
echo "<br>";
$dec = 200;
$bin = decbin($dec);
echo "Decimal: $dec, Binary: $bin<br>";
$oct = decoct($dec);
echo "Decimal: $dec, Octal: $oct<br>";
$hex = dechex($dec);
echo "Decimal: $dec, Hexadecimal: $hex<br>";

echo max(52,41,5,45,85,48,4848,484,8,48,48,489,0);
echo "<br>";
echo min(52,41,5,45,85,48,4848,484,8,48,48,489,0);
?>