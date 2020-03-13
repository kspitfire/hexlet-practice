<?php

namespace App\Map;

/*
Реализуйте набор функций, для работы со словарём, построенным на хеш-таблице. Для простоты, наша реализация не поддерживает разрешение коллизий.

    - `make()` — создаёт новый словарь
    - `set($map, $key, $value)` — устанавливает в словарь значение по ключу. Работает и для создания и для изменения. Функция возвращает `true`, если удалось установить значение. При возникновении коллизии, функция никак не меняет словарь и возвращает `false`.
    - `get($map, $key, $defaultValue = null)` — читает в словаре значение по ключу. Параметр `$defaultValue` — значение, которое функция возвращает, если в словаре нет ключа (по умолчанию равно `null`). При возникновении коллизии функция также возвращает значение по умолчанию.

Функции `set` и `get` принимают первым параметром словарь. Передача идет по ссылке, поэтому `set` может изменить его напрямую.

Для полноценного погружения в тему, считаем, что массив в PHP может использоваться только как индексированный массив.
*/

// BEGIN (write your solution here)
function make(): array
{
    return [];
}

function set(array &$map, $key, $value): bool
{
    $hash = crc32($key) % 1000;

    if (true === array_key_exists($hash, $map) && $map[$hash][0] !== $key) {
        return false;
    } else {
        $map[$hash] = [$key, $value];

        return true;
    }
}

function get(array $map, $key, $defaultValue = null)
{
    $hash = crc32($key) % 1000;

    if (true === array_key_exists($hash, $map) && $map[$hash][0] === $key) {
        return $map[$hash][1];
    }

    return $defaultValue;
}
// END
