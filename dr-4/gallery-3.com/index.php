<?php
// 4. *Модернизировать логирование так, чтоб последнии данные всегда логировались в файл log.txt.
//  Как только в данном файле будет 10 записей, данные из него должны быть перенесены в файл log1.txt.
//  Если он уже существует - в log2.txt итд.
  function file_not_exists($file_name) {

    return !file_exists($file_name);
  }; 
  function is_in_file_lines_less_then($num) {
    return substr_count(file_get_contents(LOG_MAIN), PHP_EOL) < $num;
  }

  $cur_time = date('Y-m-d H:i:s');
  const LOG_NAME = 'log';
  const LOG_EXT = '.txt';
  const LOG_MAIN = 'log.txt';

  if(file_not_exists(LOG_MAIN) or is_in_file_lines_less_then(10)) {

    $text_stream =fopen(LOG_MAIN, 'a');
    fwrite($text_stream, $cur_time . PHP_EOL);
    fclose($text_stream);
    
  } else {
    $num = 1;
    while (file_exists(LOG_NAME . $num . LOG_EXT)) {
      $num++;
    };
    copy(LOG_MAIN, LOG_NAME . $num . LOG_EXT);
    file_put_contents(LOG_MAIN, $cur_time . PHP_EOL);
  }

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