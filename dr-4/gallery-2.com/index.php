<?php
// 1. Создать галерею фотографий. Она должна состоять всего из одной странички,
//  на которой пользователь видит все картинки в уменьшенном виде и 
//  форму для загрузки нового изображения. 
//  При клике на фотографию она должна открыться в браузере в новой вкладке. 
//  Размер картинок можно ограничивать с помощью свойства width. 
//  При загрузке изображения необходимо делать проверку на тип и размер файла.
// 2. Картинки должны автоматически подключатся из каталога.
// 3. *Создать логирование времени запроса пользователем главной страницы галереи.
  $cur_time = date('Y-m-d H:i:s');
  echo $cur_time;
  $text_stream =fopen('log.txt', 'a');
  fwrite($text_stream, $cur_time . PHP_EOL);
  fclose($text_stream);
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Галерея</title>
</head>
<body>
  <div class="galleryPreview">
    <?php
      $img_dir_content = scandir(__DIR__ . '/img/min/');
      foreach ($img_dir_content as $file_name) {
        // guard
        if( pathinfo($file_name, PATHINFO_EXTENSION) !== 'jpg') continue;
        $path ='./img/min/' . $file_name;
        
        $is_kblimit_exceed = round(filesize(__DIR__ . '/img/min/' . $file_name) / 1024 , 1) > 30;
        if ($is_kblimit_exceed ) continue;
        // end of guard 
        echo <<<EOL
<a href="$image_src" target="_blank"><img src="$path" alt="preview"></a>
EOL;
      }
      echo <<<EOFORM
<form action="#" method="POST" enctype="multipart/form-data">
Выберите картинку для загрузки:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Загрузить картинку" name="submit">
</form>
EOFORM;
    ?>
  </div>  
</body>
</html>