<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RunNewSeedersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:seed_run_news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command run new added seeders';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $seeders = $this->findSeeders();

        if (count($seeders) === 0) {
            $this->info('No seeders found.');
            return;
        }

        foreach ($seeders as $seeder) {
            $this->call('db:seed', ['--class' => $seeder]);

            DB::table('seeds')->insert([
                'seeder' => class_basename($seeder),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->info('Seeders run successfully.');
    }

    private function findSeeders()
    {
        $executedSeeders = DB::table('seeds')->pluck('seeder')->toArray();

        $allSeeders = collect(File::files(database_path('seeders')))
            ->map(function ($file) {
                return pathinfo($file, PATHINFO_FILENAME);
            })->toArray();
        // dd($executedSeeders);

        $unseeded = array_diff($allSeeders, $executedSeeders);
        // dd($unseeded);

        return $unseeded;
    }
}
