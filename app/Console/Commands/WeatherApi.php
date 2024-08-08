<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class WeatherApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:weather-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'forecast7.com Goreme';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        info("Weather Api Job running at " . now());
        $cacheKey = 'weather_of_nevsehir';
        $wheatherBody = ['current'];
        $wheatherBody = ['icon'];
        // Cache::forget($cacheKey);
        try {
            $wheather = Http::get("https://forecast7.com/tr/38d6434d83/goreme/?format=json")->body();
            $wheatherBody = collect(json_decode($wheather, true));
            Storage::disk('local')->put('weather-api.txt', $wheatherBody);
        } catch (Exception $e) {
            // $wheatherBody['current'] = [
            //     'icon' => '',
            //     'temp' => '',
            // ];
            info("Weather Api Job failed at " . $e->getMessage());
        }
    }
}
