<?php

if(isset($_FILES['file'])) {

    $uploadDir = '/home/bitrix/www/test_upload/';

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir.$_FILES['file']['name'])) {
        echo 'Файл успешно загружен на сервер.<br>';
    } else {
        echo 'Загрузка файла не удалась.<br>';
    }
}

$file = $uploadDir.$_FILES['file']['name'];

$row = 0;
if (($handle = fopen($file , "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c = 0; $c < $num; $c++) {
            $result[$row][] = $data[$c];
        }
        $row++;
    }
    fclose($handle);
}

foreach ($result as $key => $value) {
    $filename = $value[0];
    $content = $value[1];
    $dir = '/home/bitrix/www/test_upload/upload/';

    if (!file_exists($dir . $filename)) {
        $fIn = fopen($dir . $filename, 'w+');
        fwrite($fIn, $content);
        fclose($fIn);
    }
}

?>
