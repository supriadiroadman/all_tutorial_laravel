<?php

namespace App;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class CollectionExample extends Model
{

    public function example()
    {
        // Jalan kan perintah ini di terminal
        // clear && php artisan collection:example
        dump('Sukses load commands dari terminal');
    }
}
