<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['satir']) && isset( $_POST['sutun'])) {
        $satir_sayisi = (int)$_POST['satir'];
$sutun_sayisi = (int)$_POST['sutun'];
echo '<table border=1>';
for ($i=1; $i<$satir_sayisi;$i++){
    echo '<tr>';
    for ($j=1; $j<$sutun_sayisi;$j++){
        $rastgele_sayi=rand(1,100);
        echo '<td>' . $rastgele_sayi . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
    }



     ?>
     <form method="post" action="">
        Satır Sayısı:<input type="number" name="satir" required><br>
        Sütun Sayısı:<input type="number" name="sutun" required><br>
        <input type="submit" value="Tablo Oluştur">
</form>
</body>
</html>