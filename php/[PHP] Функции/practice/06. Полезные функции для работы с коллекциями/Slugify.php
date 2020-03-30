<?php

namespace App\Slugify;

use Funct\Strings;
use Funct\Collection;

/*
	Реализуйте функцию slugify самостоятельно, не прибегая к \Funct\Strings\slugify. 
*/

// BEGIN (write your solution here)
function slugify(string $sentence): string
{
    $chunks = explode(' ', Strings\toLower($sentence));
    $chunks = Collection\compact($chunks);

    return implode('-', $chunks);
}
// END
