// a. 4, 6, 9, 13, 18, ?, ?
$a = [4, 6, 9, 13, 18];
for ($i = 4; $i < 6; $i++) {
    $selisih = $i + 2; // mulai dari 6, 7
    $a[] = end($a) + $selisih;
}
echo "a. " . implode(", ", $a) . "<br>";