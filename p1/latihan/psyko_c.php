// c. 1, 9, 2, 10, 3, ?, ?
$c = [1, 9, 2, 10, 3];
$kecil = 4;
$besar = 11;
for ($i = 0; $i < 2; $i++) {
    $c[] = $besar;
    $c[] = $kecil;
    $kecil++;
    $besar++;
}
echo "c. " . implode(", ", $c) . "<br>";
?>