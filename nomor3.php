<?php
?>
<center><form action="" method="get">
    Samping<input type="text" name="pa"></br>
    Bawah<input type="text" name="lala"></br>
    <input type="submit" name="go">
</form></center>
<center><?php
if(isset($_GET['go'])) {
$pa = $_GET['pa'];
$lala = $_GET['lala'];
if(cekGanjil($pa) && cekGanjil($lala)) {
persegi($pa, $lala);
} else {
echo "Kedua bilangan harus ganjil";
}}
function persegi($pa, $lala) {
for ($i=1; $i <= $lala; $i++) {
for ($a=1; $a <= $pa; $a++) {
if ($i == 1 || $i == $lala && $i != middle($lala)) {
echo "*";
} else {
if ($a== middle($pa) || $a == 1 || $a == $pa) {
echo "*";
} else if ($i == middle($lala)) {
echo "*";
} else {
echo "&nbsp&nbsp";}}}
echo "</br>";}}
function middle($a) {
return ($a + 1) / 2;}
function cekGanjil($b) {
if($b % 2 == 1)
return true;
else
return false;
}
?></center>