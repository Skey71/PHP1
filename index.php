1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

<?php
$i = 0;
while ($i < 100) {
    $i++;
    if (($i % 3) == 0) {
        echo " " . $i;
    }
}

2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:

    0 – ноль.
    1 – нечетное число.
    2 – четное число.
    3 – нечетное число.
    …
    10 – четное число.


<?php
$i = 0;
do {
    if ($i == 0) {
        echo $i . " - Ноль; ";
    } else if (($i % 2) == 0) {
        echo $i . " - Четное число; ";
    } else if (($i % 2) != 0) {
        echo $i . " - Нечетное число; ";
    }
    $i++;
} while ($i <= 10);


3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. 
Вывести в цикле значения массива, чтобы результат был таким:
   Московская область:
   Москва, Зеленоград, Клин.
   Ленинградская область:
   Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
   Рязанская область … (названия городов можно найти на maps.yandex.ru) строго соблюдать формат вывода выше, т.е. двоеточие и точка в конце


   ?php
$address = [
    "Московская область:" => ["Москва",  "Зеленоград", "Клин."],
    "Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт."],
    "Рязанская область:" => ["Рязань", "Милославское", "Шацк", "Пителино."]
];

foreach ($address as $value) {
    echo key($address); // я не разобрался, как вывести текущее значение ключа
    echo "<br>";
    foreach ($value as $item) {
        echo $item . " ";
    }
    echo "<br>";
    echo "<br>";
}


4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).

Написать функцию транслитерации строк. Она должна учитывать и заглавные буквы.

<?php
function translit($text) {
    $alphabet = [
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya'
    ];

    $text = strtr($text, $alphabet);
    return $text;
}

echo translit("Привет как дела?");

5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. Можно через str_replace


<?php
function underscore($text) {
    $replaced = str_replace(' ', '_', $text);
    echo $replaced;
}

underscore("Век живи - век учись");


