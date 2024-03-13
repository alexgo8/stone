<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    Cache::put('example', 'my_string'); // положить данные в NoSql(Redis)

    $str = Cache::get('example');   // прочитать данные из NoSql(Redis)

    Cache::put('example', 'new_string'); // перезапись данных NoSql(Redis) перезапись происходит по тому же ключю

    Cache::forget('example'); // стереть данные NoSql(Redis)  

    $str = Cache::get('example'); // прочитать  перзаписанные данные из NoSql(Redis)

    dump($str);

    $str = 'новая строка';
    $result = '';
    if (Cache::has('example')) {
      $result = Cache::get('example');
    } else {
      Cache::put('example', $str);
      $result = $str;
    }
    dump($result);


    $str = 'моя строка';
    $result = '';
    $result = Cache::remember('my_string', 60 * 60, function () use ($str) {
      return dump($str);
    });
    }
}
