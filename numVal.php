<?php
    // Получение текущей даты
    $currentDate = date('d.m.Y');
    // Расчет суммы цифровых значений даты
    $sumOfDigits = array_sum(str_split(str_replace('.', '', $currentDate))); 


     // Получение данных с сервера ЦБ РФ
    $url = 'https://www.cbr-xml-daily.ru/daily_json.js';
    $data = file_get_contents($url);  //для получения данных с указанного эндпоинт
    $json = json_decode($data, true); //используется для декодирования JSON-строки в ассоциативный массив

    // Извлечение курса GBP и округление до целого числа
    $exchangeRateGBP = round($json['Valute']['GBP']['Value']);

?>