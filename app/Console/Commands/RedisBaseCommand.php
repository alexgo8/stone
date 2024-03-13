<?php

namespace App\Console\Commands;

use App\Models\Base;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisBaseCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'redis:base';

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
    Cache::rememberForever('base:all', function () {
      return Base::all();
    })->each(function ($base) {
      return Cache::put('base:' . $base->id, $base);
    });
    dump('сделано');
  }
}
