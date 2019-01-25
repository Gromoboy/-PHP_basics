<?php
// 1. Создать галерею фотографий. Она должна состоять всего из одной странички,
//  на которой пользователь видит все картинки в уменьшенном виде и 
//  форму для загрузки нового изображения. 
//  При клике на фотографию она должна открыться в браузере в новой вкладке. 
//  Размер картинок можно ограничивать с помощью свойства width. 
//  При загрузке изображения необходимо делать проверку на тип и размер файла.
  $img_sources = [
    './img/min/1.jpg'=>'./img/max/1.jpg',
    './img/min/2.jpg'=>'./img/max/2.jpg',
    './img/min/3.jpg'=>'./img/max/3.jpg',
    './img/min/4.jpg'=>'./img/max/4.jpg',
    './img/min/ones.txt'=>'..'
  ]
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
      foreach ($img_sources as $preview_src => $image_src) {
        // guard
        $is_kblimit_exceed = round(filesize($preview_src) / 1024 , 1) > 30;
        $file_extension = pathinfo($preview_src, PATHINFO_EXTENSION);

        if ($is_kblimit_exceed or $file_extension !=='jpg' ) continue;
        
        echo <<<EOL
<a href="$image_src" target="_blank"><img src="$preview_src" alt="preview"></a>
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