## src\Users.php

Реализуйте функцию `takeOldest`, которая принимает на вход список пользователей и возвращает самых взрослых. Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.

## Пример использования
```php
<?php
$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

takeOldest($users);
# Array (
#     ['name' => 'Rob', 'birthday' => '1975-01-11']
# )
```

## Подсказки

    - Для преобразования даты в `unixtimestamp` используйте функцию `strtotime`
    - [firstN](https://github.com/phpfunct/funct#firstncollection-n--1)
    - [usort](https://www.php.net/manual/ru/function.usort.php)
