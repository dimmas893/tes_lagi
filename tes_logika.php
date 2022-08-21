soal nomor 1 =
<br>
<?php

$angka = 17;
$hasil = true;
for ($i = 2; $i < $angka; $i++)
{
    if ($angka % $i == 0)
        $hasil = false;
}
echo 'Angka <b>'.$angka.'</b><br/>';
echo $hasil ? 'Termasuk bilangan prima' : 'Bukan bilangan prima';

?>
<br>
<br>
<br>








soal nomor 2 =
<br>
<?php
    
$x = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
echo $x[5];
?>

<br>
<br>











soal nomor 3 = 
<br>

<?php
 
for ($i=1; $i <=8 ; $i++) {

 for ($j=4; $j>=$i ; $j--) {
 
 echo "";
 }
 
for ($k=1; $k <=$i ; $k++) {
 
 echo "$k";
 }
 echo "<br>";
}
?>

<br>
<br>
<br>


soal nomor 4 = 
<br>
<?php
$fruits = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$val\n";
}
?>



<br>
<br>
<br>



soal nomor 5 = 
<br>

<?php
echo "1 5 9"; 
echo "<br>2 6 10";
echo "<br>3 7 11";
echo "<br>4 8 12";

?>
