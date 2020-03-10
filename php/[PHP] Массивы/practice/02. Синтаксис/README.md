Реализуйте функцию `apply`, которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:

   - `reset` - Сброс массива
   - `remove` - Удаление значения по индексу
   - `change` - Обновление значения по индексу

```php
<?php

use function App\Arrays\apply;

$cities = ['moscow', 'london', 'berlin', 'porto'];

// Сброс в пустой массив
apply($cities, 'reset'); // []

// удаление значения по индексу
apply($cities, 'remove', 1); // ['moscow', 'berlin', 'porto']
// изменение значения по индексу
apply($cities, 'change', 0, 'miami'); // ['miami', 'london', 'berlin', 'porto']
```
