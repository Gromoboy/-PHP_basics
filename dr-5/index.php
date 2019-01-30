<?php
//1. Создать галерею изображений, состоящую из двух страниц:
//
//    просмотр всех фотографий (уменьшенных копий);
//    просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
//
//2. В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
//3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
//4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности. Популярность = число кликов по фотографии.

$link = mysqli_connect('localhost', 'root', '', 'gbphp');


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
    <title>Галерея</title>
    <style>
      p {
        text-align: center;
      }
      .full-img{
        display:table;
        margin: 0, auto;
      }
    </style>
</head>
<body>
  <?php
  if (count($_GET) === 0) {
    echo '<div class="galleryPreview">';
    // в запросе сортируем по просмотрам в порядке убывания
    $sql_query = "SELECT id, preview_src, show_count name FROM photos ORDER BY show_count DESC;";
    $result = mysqli_query($link, $sql_query) or die(mysqli_error($link));
    
    while ($img_info = mysqli_fetch_assoc($result)) {
    
    echo <<<EOL
      <a href="?id={$img_info['id']}" ><img src="{$img_info['preview_src']}" alt="{$img_info['name']}"></a>
EOL;
    }
    
  } else {
    // если в адресе послан запрос
    echo '<div class="full-img">';
    $photo_id = $_GET['id'];
    $sql_query = "SELECT photo_src, show_count  FROM photos WHERE id = $photo_id";
    $result = mysqli_query($link, $sql_query) or die(mysqli_error($link));
    $img_info = mysqli_fetch_assoc( $result);
    $img_info['show_count']++;
    echo "<img src={$img_info['photo_src']} ><p>Просмотрено: {$img_info['show_count']}</p>";
    // обновляем счетчик просмотров в базе
    $sql_query = "UPDATE photos SET show_count ={$img_info['show_count']} WHERE id=$photo_id";
    mysqli_query($link, $sql_query);
    // кнопка возврата
    echo '<a href="index.php"><<< Назад</a>';
  }
  echo '</div>'
  ?>

</div>
</body>
</html>