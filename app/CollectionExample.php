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


        // 46. toJson  --------------------------------------

        // return collect(['a' => 1, 'b' => 2, 'c' => 3])->toJson(JSON_PRETTY_PRINT);


        /*
        $data = collect(['a' => 1, 'b' => 2, 'c' => 3])->toArray();
        return json_encode($data);
        */


        // return collect(['a' => 1, 'b' => 2, 'c' => 3])->toJson();


        // 45. all / toArray  --------------------------------------


        // return collect([
        //     collect([1, 2, 3, 4]),
        //     collect([1, 2, 3, 4]),
        // ])->toArray();

        /*     return collect([
            collect([1, 2, 3, 4]),
            collect([1, 2, 3, 4]),
        ])->all();
        */

        // return collect([1, 2, 3, 4])->toArray();

        // return collect([1, 2, 3, 4])->all();


        // 44. times  --------------------------------------

        /*
        return Collection::times(3, function ($value) {
            return factory(User::class)->make([
                'name' => "Cool Name {$value}",
            ]);
        })->toArray();
        */


        /*  return Collection::times(3, function ($value) {
            return factory(User::class)->make();
        })->toArray();

         */


        /*  return $collection = Collection::times(5, function ($number) {
            // return $number;
            return $number * 2;
        })->all();
        */


        /*  return $collection = Collection::times(5, function ($number) {
            return 10;
        })->all();
         */





        // 43. dump  --------------------------------------
        /*
        return collect([1, 2, 3, 4])
            ->dump()
            ->reverse()
            ->dump()
            ->map(function ($item) {
                return $item * 2;
            })
            ->dump()
            ->reverse()
            ->dump()
            ->first();
        */

        // return collect(['John Doe', 'Jane Doe'])->dump();



        // 42. each  --------------------------------------

        /*
        return collect([
            ['Supriadi', 32, 'Jakarta'],
            ['Budi', 31, 'Bandung'],
            ['Candra', 30, 'Medan'],
        ])->eachSpread(function ($nama, $umur, $alamat) {
            dump("Nama saya {$nama}, Tinggal di {$alamat}, Umur {$umur}");
        });
        */


        /*
        return collect([
            ['Supriadi', 32, 'Jakarta'],
            ['Budi', 31, 'Bandung'],
            ['Candra', 30, 'Medan'],
        ])->each(function ($item) {
            dump("Nama saya {$item[0]}, Umur {$item[1]}, Tinggal di {$item[2]} ");
        });
        */


        /*  return collect([1, 2, 3, 4])
            ->each(function ($item, $key) {
                if ($item > 2) {
                    return false;
                }
                dump("Value: {$item} ");
            });
            */


        /*
        return collect([1, 2, 3, 4])
            ->each(function ($item, $key) {
                dump("Key: {$key} => Value: {$item} ");
            });
        */






        // 41. nth  --------------------------------------


        /* return collect([
            'product' => 'apple',
            'price' => 100,
            'qty' => 5,
            'color' => 'red'
        ])
            // ->only('product');
            // ->only(['product', 'color']);
            ->only('product', 'color');
         */


        /*
        return collect(
            ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]
        )->only('a', 'd');
         */

        // return collect([1, 2, 3, 4])->only(0, 3);



        // 40. nth  --------------------------------------

        /*
        // offset 1
        return $collection = collect(['a', 'b', 'c', 'd', 'e', 'f'])->nth(4, 1);
        */

        // return $collection = collect(['a', 'b', 'c', 'd', 'e', 'f'])->nth(4);




        // 39. take  --------------------------------------

        // return $collection = collect([2, 3, 4, 5, 6])->reverse()->take(1);

        // return $collection = collect([2, 3, 4, 5, 6])->take(-2);

        // return $collection = collect([2, 3, 4, 5, 6])->take(3);




        // 38. reverse --------------------------------------

        /*   return collect([
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ])->reverse()->values();
        */

        /*  return collect([
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ])->reverse();
        */

        // return $collection = collect(['a', 'b', 'c', 'd', 'e'])->reverse();




        // 37. isEmpty / isNotEmpty  ----------------------------


        /*
        $data = collect([1, 2, 3, 4]);

        if ($data->isNotEmpty()) {
            return $data->first();
        }
        */

        // return collect([1, 2, 3, 4])->isNotEmpty();

        // return collect([''])->isNotEmpty();

        // return collect([null])->isNotEmpty();

        // return collect([])->isNotEmpty();



        // return collect([1, 2, 3, 4])->isEmpty();

        // return collect([''])->isEmpty();

        // return collect([null])->isEmpty();

        // return collect([])->isEmpty();




        // 36. last  ------------------------------------------

        /*
        return collect([1, 2, 3, 4])->last(function ($value, $key) {
            return $value > 2;
        });
        */

        /*
        return collect([
            [4, 2, 3, 1],
            [5, 7, 2, 7],
            [8, 1, 9, 7],
        ])->last();
        * /

        // return collect([4, 2, 3, 1])->last();




        // 35. first  ------------------------------------------


        /*
        return collect([1, 2, 3, 4])->first(function ($value, $key) {
            return $value > 2;
        });
        */

        /*
        return collect([
            [4, 2, 3, 1],
            [5, 7, 2, 7],
            [8, 1, 9, 7],
        ])->first();
        */

        // return collect([4, 2, 3, 1])->first();




        // 34. groupBy  ------------------------------------------

        /* return collect([
            ['product' => '123-samsung', 'price' => 100],
            ['product' => '123samsung', 'price' => 200],
            ['product' => '123 samsung', 'price' => 300],
            ['product' => '123.apple', 'price' => 400],
        ])->groupBy(function ($item) {
            return str_replace('-', '', $item['product']);
        })->toArray();
         */


        /* return collect([
            'key1' => ['product' => 'samsung', 'price' => 100],
            'key2' => ['product' => 'samsung', 'price' => 200],
            'key3' => ['product' => 'samsung', 'price' => 300],
            'key4' => ['product' => 'apple', 'price' => 400],
            'key5' => ['product' => 'apple', 'price' => 500],
        ])->groupBy('product', true)->toArray();
        */


        /*   return collect([
            ['product' => 'samsung', 'price' => 100],
            ['product' => 'samsung', 'price' => 200],
            ['product' => 'samsung', 'price' => 300],
            ['product' => 'apple', 'price' => 400],
            ['product' => 'apple', 'price' => 500],
        ])->groupBy('product')->toArray();
        */


        // 33. shortBy  ------------------------------------------

        /*  $collection = collect([
            ['name' => 'Desk', 'price' => [100, 300]],
            ['name' => 'Chair', 'price' => [900]],
            ['name' => 'Bookcase', 'price' => [500, 400, 600]],
        ]);

        $sorted = $collection->sortBy(function ($item, $key) {
            return count($item['price']);
        });

        return $sorted->values()->all();
         */


        /*
        $collection = collect([
            ['name' => 'Desk', 'price' => 200],
            ['name' => 'Chair', 'price' => 100],
            ['name' => 'Bookcase', 'price' => 300],
        ]);

        $sorted = $collection->sortBy('price');
        // return $sorted;
        return $sorted->values()->all();
         */





        // 32. short  ------------------------------------------


        // return collect(['A234', 'B123', 'C234', 'Z123'])->sort();

        // return collect([3, 6, 2, 9, 1])->sort();



        // 31. zip  ------------------------------------------

        /* return collect(['id', 'name', 'email'])
            ->zip(['123', 'John doe', 'jhondoe@mail.com']); */

        /*  return collect([1, 2, 3, 4])
            ->zip([5, 6, 7, 8], [null, 'b', 'c']);
        */


        /* return collect([1, 2, 3, 4])
            ->zip([5, 6, 7, 8], ['a', 'b', 'c', 'd']); */

        // return collect([1, 2, 3, 4])->zip([5, 6, 7, 8]);







        // 30. dd  ------------------------------------------

        /*
        return collect([1, 2, 3])
            // ->dd()
            ->map(function ($item) {
                return $item * 2;
            })
            // ->dd()
            ->mapWithKeys(function ($item, $key) {
                return [$key => $item * 10];
            })
            // ->dd()
            ->reverse();
        */





        // 29. firstWhere  ------------------------------------------

        /*
        return $collection = collect([
            ['product' => 'Apple', 'price' => null],
            ['product' => 'Chair', 'price' => 100],
            ['product' => 'Bookcase', 'price' => null],
            ['product' => 'Apple', 'price' => 100],
        ])->firstWhere('price');
        */


        /*  return $collection = collect([
            ['product' => 'Apple', 'price' => 100],
            ['product' => 'Chair', 'price' => 100],
            ['product' => 'Bookcase', 'price' => 100],
            ['product' => 'Apple', 'price' => 200],
        ])
            // ->where('price', 100)->first();
            ->firstWhere('price', 100);
         */


        /*
        $collection = collect([
            ['product' => 'Apple', 'price' => 100],
            ['product' => 'Chair', 'price' => 200],
            ['product' => 'Bookcase', 'price' => 300],
            ['product' => 'Apple', 'price' => 999999],
        ]);

        return $collection->firstWhere('product', 'Apple');
        */






        // 28. pluck ------------------------------------------


        /*
        return collect([
            ['product' => 'apple', 'price' => 100, 'quantity' => 5],
            ['product' => 'oppo', 'price' => 200, 'quantity' => 10],
            ['product' => 'samsung', 'price' => 300, 'quantity' => 15],
            ['product' => 'xiomi', 'price' => 400, 'quantity' => 20],
        ])->map(function ($item) {
            return collect($item)->only(['product', 'quantity']);
        });
        */

        /*
        return collect([
            ['product' => 'apple', 'price' => 100, 'quantity' => 5],
            ['product' => 'oppo', 'price' => 200, 'quantity' => 10],
            ['product' => 'samsung', 'price' => 300, 'quantity' => 15],
            ['product' => 'xiomi', 'price' => 400, 'quantity' => 20],
        ])->map(function ($item) {
            return collect($item)->only(['product', 'quantity']);
        }); */

        /*  return collect([
            ['product' => 'apple', 'price' => 100, 'quantity' => 5],
            ['product' => 'oppo', 'price' => 200, 'quantity' => 10],
            ['product' => 'samsung', 'price' => 300, 'quantity' => 15],
            ['product' => 'xiomi', 'price' => 400, 'quantity' => 20],
        ])->map(function ($item) {
            return Arr::only($item, ['product', 'quantity']);
        });
        */



        /*
        return collect([
            ['product' => 'apple', 'price' => 100, 'quantity' => 5],
            ['product' => 'oppo', 'price' => 200, 'quantity' => 10],
            ['product' => 'samsung', 'price' => 300, 'quantity' => 15],
            ['product' => 'xiomi', 'price' => 400, 'quantity' => 20],
        ])->pluck('product');
        */





        // 27. filter ------------------------------------------

        /*
        $collection = collect([1, 2, 3, 4]);

        $filtered = $collection->filter(function ($value, $key) {
            return $value > 2;
        });

        return $filtered;
        */

        // return collect([1, 2, 3, 4, '', 0, false])->filter();





        // 26. unWrap ------------------------------------------

        /*
        return Collection::unwrap('John doe'); // return tetap sama
        return Collection::unwrap(['John doe']); // return tetap sama
        return Collection::unwrap(collect(['John doe'])); // return tetap sama
        */

        // 25. Wrap ------------------------------------------


        /*
        return Collection::wrap('John doe'); // return tetap sama
        return Collection::wrap(['John doe']); // return tetap sama
        return Collection::wrap(collect(['John doe'])); // return tetap sama
        */




        // 24. whereInstanceOf --------------------------------


        /*
        $collection = collect([
            new Collection(),
            new User(),
            new User(),
        ]);

        $filtered = $collection->whereInstanceOf(User::class);

        return $filtered;
         */


        // 23. whereNotIn whereNotInStrict ----------------------------

        /*
        $collection = collect([
            ['product' => 'Desk', 'price' => 100],
            ['product' => 'Chair', 'price' => 200],
            ['product' => 'Bookcase', 'price' => 300],
            ['product' => 'Door', 'price' => 400],
        ]);

        // $filtered = $collection->whereNotInStrict('price', ['200', '300', 400]);
        // $filtered = $collection->whereNotInStrict('price', ['200', '300']);
        $filtered = $collection->whereNotIn('price', [200, 300]);

        return $filtered;
         */



        // 22. whereIn whereInStrict ----------------------------


        /*
        $collection = collect([
            ['product' => 'Desk', 'price' => 100],
            ['product' => 'Chair', 'price' => 200],
            ['product' => 'Bookcase', 'price' => 300],
            ['product' => 'Door', 'price' => 400],
            ['product' => 'Pencil', 'price' => 500],
            ['product' => 'Apple', 'price' => 600],
        ]);

        // $filtered = $collection->whereInStrict('price', ['300', '400']);
        // $filtered = $collection->whereInStrict('price', ['300', '400', 500]);
        $filtered = $collection->whereIn('price', [300, 400]);

        return $filtered;
        */







        // 21. whereBetween whereNotBetween ----------------------------

        /*
        $collection = collect([
            ['product' => 'Desk', 'price' => 100],
            ['product' => 'Chair', 'price' => 200],
            ['product' => 'Bookcase', 'price' => 300],
            ['product' => 'Pencil', 'price' => 400],
            ['product' => 'Door', 'price' => 500],
        ]);

        // $filtered = $collection->whereNotBetween('price', [200, 400]);
        $filtered = $collection->whereBetween('price', [200, 400]);

        return $filtered;
        */






        // 20. where whereStrict ----------------------------

        /*
        $collection = collect([
            ['product' => 'Desk', 'price' => 100],
            ['product' => 'Chair', 'price' => 200],
            ['product' => 'Bookcase', 'price' => 300],
            ['product' => 'Door', 'price' => 100],
        ]);

        // $filtered = $collection->whereStrict('price', '100');
        // $filtered = $collection->where('price', 100);
        $filtered = $collection->where('price', '!=', 100);

        return $filtered;
        */




        // 19. mapToGroups  ---------------------------------

        /*
        $collection = collect([
            [
                'name' => 'John Doe',
                'department' => 'Sales',
            ],
            [
                'name' => 'Jane Doe',
                'department' => 'Sales',
            ],
            [
                'name' => 'Johnny Doe',
                'department' => 'Marketing',
            ]
        ]);

        $grouped = $collection->mapToGroups(function ($item, $key) {
            return [$item['department'] => $item['name']];
        });

        return  $grouped->toArray();
        */


        /* Hasil
            [
                'Sales' => ['John Doe', 'Jane Doe'],
                'Marketing' => ['Johnny Doe'],
            ]
        */

        // return $grouped->get('Sales')->all();

        // Hasil
        // ['John Doe', 'Jane Doe']





        // 18. mapSpread ---------------------------------

        /*
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]);

        $chunks = $collection->chunk(2);

        return  $sequence = $chunks->mapSpread(function ($even, $odd) {
            // dump($even);
            // dump($odd);
            // dump('---');
            return $even + $odd;
        });
         */





        // 17. mapInto ---------------------------------

        // Class converter in line bottom
        /*
        $data = collect([1, 2, 3, 4]);
        return $data->mapInto(Converter::class)->map(function ($item) {
            return $item->toCentimeters();
        });
        */



        // 16. mapWithKeys ---------------------------------

        /*
        $collection = collect([1, 2, 3, 4, 5]);
        $newCollection = $collection->mapWithKeys(function ($item) {
            return [];
        });
        // return $collection;
        return $newCollection;
        */


        /*
        return collect([
            'key1' => 'value1',
            'key2' => 'value2',
        ])->mapWithKeys(function ($item, $key) {
            return [
                $key => $item,
                $key . '_upper' => strtoupper($item)
            ];
        });
         */


        /*
        return collect([
            'key1' => 'value1',
            'key2' => 'value2',
        ])->mapWithKeys(function ($item, $key) {
            if ($key == 'key1') {
                return [];
            }
            return [$item => $key];
        });
        */


        /*
        return collect([
            'key1' => 'value1',
            'key2' => 'value2',
        ])->mapWithKeys(function ($item, $key) {
            return [$item => $key];
        }); */







        // 15. map -----------------------------------------

        /*
        $collection = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];
        return collect($collection)->map(function ($item, $key) {
            return [$key . '-' . $item];
        });
        */

        /*  $collection = [1, 2, 3, 4, 5];
        return collect($collection)->map(function ($item, $key) {
            return $item * 2;
        });
        */





        // 14. tap -------------------------------------------------

        /*
        return collect([10, 20, 30])->reverse()
            ->tap(function ($collection) {
                $collection->each(function ($value, $key) {
                    dump('In tap index Key ' . $key);
                    dump('In tap Value ' . $value);
                });
            });
        */

        /*   return collect([10, 20, 30])
            ->tap(function ($collection) {
                $collection->each(function ($value, $key) {
                    dump('In tap index Key ' . $key);
                    dump('In tap Value ' . $value);
                });
            });
        */



        // 13. diffUsing diffAssocUsing diffKeysUsing ---------------------------------

        // Not documentation laravel !!!



        // 12. diff diffAssoc diffKeys ---------------------------------

        /*  $collection = [
            'color' => 'red',
            'size' => 'Big',
            'year' => '2018',
        ];

        return collect($collection)->diffKeys([
            'color' => 'yellow',
            'size' => 'Big',
            'blabla' => '2018'
        ]);
        */

        /*   $collection = [
            'color' => 'red',
            'size' => 'Big',
            'year' => '2018',
        ];

        return collect($collection)->diffAssoc([
            'color' => 'yellow',
            'size' => 'Big',
            'blabla' => '2018'
        ]);
        */

        /*   $collection = [1, 2, 3, 4, 5];
        return collect($collection)->diff([2, 4, 6, 8]);
        */






        // 11. crossJoin ------------------------------------------------

        /*
        $collection = collect(['avanza', 'xenia']);
        $matrix = $collection->crossJoin(
            ['manual', 'automathic'],
            ['silver', 'black'],
            ['2018', '2019', '2020']
        );
        return $matrix;
        */

        /*   $collection = collect(['avanza', 'xenia']);
        $matrix = $collection->crossJoin(['manual', 'automathic']);
        return $matrix;
    */
        /*
        $collection = collect([1, 2]);
        $matrix = $collection->crossJoin(['a', 'b'], ['I', 'II']);
        return $matrix;
        */

        /*
        $collection = collect([1, 2]);
        $matrix = $collection->crossJoin(['a', 'b']);
        return $matrix;
         */




        // 10. Count ------------------------------------------------

        /*  $data = [1, 2, 3, 4, 5 => [6, 7, 8]];
        return collect($data)->count();
        */
        // return collect([1, 2, 3, 4, 5])->count();




        // 9. Contains & containsStrict -----------------------------

        /*
        return collect([15])->containsStrict('0015');
        return collect([15])->contains('0015');
        */

        /*
        return collect([15])->containsStrict('15');
        return collect([15])->contains('15');
    */
        /*
        $collection = collect([1, 2, 3, 4, 5]);
        return $collection->contains(function ($value, $key) {
            // return $value > 5;
            return $value > 4;
        });
        */

        /*
        $collection = collect([
            ['product' => 'Desk', 'price' => 200],
            ['product' => 'Chair', 'price' => 100],
        ]);
        // return $collection->contains('product', 'Not available');
        return $collection->contains('product', 'Chair');
        */

        /*
        $collection = collect(['name' => 'Jhon', 'price' => 100]);
        // return $collection->contains('Jhon');
        return $collection->contains('Michael');
        */

        // return collect(['value1'])->contains('value1');
        // return collect(['value1'])->contains('val1');




        // 8. Concat --------------------------------------------

        /*  $collection = collect(['value1']);
        return $collection->concat(['value2'])->concat(['name' => 'John Doe']);
        */



        // 7. Combine --------------------------------------------

        /*
        $keys = ['column1', 'column2'];
        $values = [
            ['value1' => 123],
            ['value2' => 456, 'value3' => 789]
        ];
        return collect($keys)->combine($values);
        */

        /*
        $keys = ['column1', 'column2'];
        $values = ['value1', 'value2'];
        return collect($keys)->combine($values);
        // return collect(['col1', 'col2'])->combine(['val1', 'val2']);
        */



        // 6. Chunk ----------------------------------------------

        // Memecah collection

        /*
        $data = [1, 2, 3, 4, 5, 6, 7, 8];
        return collect($data)->chunk(3);
        // return collect($data)->chunk(3)->toArray();
        */




        // 5. Collapes --------------------------------------------
        // Memperkecil collection item menjadi 1 array

        /*
        $data = [
            ['a' => ['satu', 'dua', 'tiga']],
            ['b' => ['empat', 'lima', 'enam']],
        ];
        // return collect($data);
        return collect($data)->collapse();
        */

        /*
        $data = [
            [1, 2, 3],
            [4, 5, 6],
        ];
        // return collect($data);
        return collect($data)->collapse();
        */




        // 4. Min --------------------------------------------

        /*  $data = [
            ['price' => 10000, 'tax' => 500, 'active' => false],
            ['price' => 20000, 'tax' => 700, 'active' => true],
            ['price' => 30000, 'tax' => 900, 'active' => true],
        ];
        return collect($data)->min(function ($value) {
            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });
        */


        /*
        $data = [
            ['price' => 10000, 'tax' => 500],
            ['price' => 20000, 'tax' => 700],
            ['price' => 30000, 'tax' => 900],
        ];
        return collect($data)->min(function ($value) {
            return $value['price'] + $value['tax'];
        });
        */


        /*
            $data = [10000, 20000, 30000];
            return collect($data)->min();
        */




        // 3. Median --------------------------------------------

        /*
           $data = [
            ['price' => 10],
            ['price' => 20],
            ['price' => 30],
            ['price' => 40],
        ];
        return collect($data)->median('price');
        */

        /*
        $data = [10, 20, 30, 40];
        return collect($data)->median();
        */




        // 2. Max --------------------------------------------

        /*
        $data = [
            ['price' => 10000, 'tax' => 500, 'active' => true],
            ['price' => 20000, 'tax' => 700, 'active' => false],
            ['price' => 30000, 'tax' => 900, 'active' => false],
        ];
        return collect($data)->max(function ($value) {
            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });
        */

        /*
        $data = [
            ['price' => 10000, 'tax' => 500],
            ['price' => 20000, 'tax' => 700],
            ['price' => 30000, 'tax' => 900],
        ];
        return collect($data)->max(function ($value) {
            return $value['price'] + $value['tax'];
        });
        */


        /*
        $data = [
            ['price' => 10000],
            ['price' => 20000],
            ['price' => 30000],
        ];
        return collect($data)->max('price');
        */

        // $data = [10000, 20000, 30000];
        // return collect($data)->max();




        // 1. Average -----------------------------------------

        /*
        $data = [
            ['price' => 10000, 'tax' => 500, 'active' => true],
            ['price' => 20000, 'tax' => 700, 'active' => false],
            ['price' => 30000, 'tax' => 900, 'active' => true],
        ];
        return collect($data)->average(function ($value) {
            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });
        */

        /*
        $data = [
            ['price' => 10000, 'tax' => 500],
            ['price' => 20000, 'tax' => 700],
            ['price' => 30000, 'tax' => 900],
        ];
        return collect($data)->average(function ($value) {
            // dump($value);
            return $value['price'] + $value['tax'];
        });
        */

        /*
        $data = [
            ['price' => 10000],
            ['price' => 20000],
            ['price' => 30000],
        ];
        return collect($data)->average('price');
        */

        /*
        $data = [10, 20, 30];
        return collect($data)->average();
        */

        // return (10 + 20 + 30) / 3;

        // return collect([1, 2, 3, 4, 5])->first();

        // return collect([1, 2, 3, 4, 5])->last();
    }
}


/*
class Converter
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function toCentimeters()
    {
        return $this->amount * 2.54;
    }
}
*/
