<?php
    // для точности в один момент времени берем метку времени и переводим её сначала
    // в часы, затем оную же в минуты
    // (иначе два разных вызова могут привести на границе часа к час от прошлого мионута от наступившего)
    $timeStamp = time();
    $hour = date('G', $timeStamp);
    $minutes = date('i', $timeStamp);

    /* 1 час 2 часа 3 часа 4 часа
       5 часов ... 11 часов 12 часов ... 20 часов
       21 час 22 часа 23 часа 24 часа
    */

    // функция рассчитана на вывод как часов так и минут (окончания подставляются в параметры)
    function getTimeName ($value, $sufa, $sufb, $sufc) {
        if ($value > 20) $value %= 10;

        if ($value == 1) return " $sufa ";
        if ($value > 1 and $value < 5) return " $sufb ";
        return " $sufc ";
    }
    echo $hour . ':' . $minutes . '<br>';
    $timeTablo = $hour . getTimeName($hour, 'час', "часа", "часов");
    $timeTablo .= $minutes . getTimeName($minutes, 'минута', 'минуты', "минут");
    echo $timeTablo;
