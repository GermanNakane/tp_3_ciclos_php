<?php
echo "1- Números del 1 al 100 \n";
$i=1;
while($i<=100){
    print "<p>$i</p>\n";
    $i++;
}
echo "<br>";
echo "2- Números del 100 al 1 \n";
$i=100;
while($i>=1){
    print "<p>$i</p>\n";
    $i--;
}
echo "<br>";
echo "3- Números pares del 1 al 100 \n";
$i=2;
do{
    print "<p>$i</p>\n";
    $i+=2;
} while($i <=100);
echo "<br>";
echo "4- Números impares del 1 al 100 \n";
$i=1;
do{
    print "<p>$i</p>\n";
    $i+=2;
} while($i <100);
echo "<br>";
echo "5- Suma números del 1 al 20 \n";
$acumulador=0;
for($i=1; $i<=20; $i++){
    $acumulador=$acumulador+$i;
    print "<p>$acumulador</p> \n";
}
echo "<br>";
echo "6- Suma números pares del 1 al 20 \n";
$acumulador=0;
for($i=2; $i<=20; $i+=2){
    $acumulador=$acumulador+$i;
    print "<p>$acumulador</p> \n";
}

?>