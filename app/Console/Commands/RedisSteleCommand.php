<?php

namespace App\Console\Commands;

use App\Models\Stele;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisSteleCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'redis:stele';

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
    $result = Cache::rememberForever('steles:all', function() {
      return Stele::all();
    })->each(function($stele) {
      return Cache::put('stele:' . $stele->id, $stele);
    });
    dump('сделано');
  }
}
