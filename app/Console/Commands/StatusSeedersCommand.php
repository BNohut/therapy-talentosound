<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StatusSeedersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:seed_status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command shows the status of seeders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $unSeeders = $this->findSeeders();
        $executedSeeders = DB::table('seeds')->pluck('seeder')->toArray();

        foreach ($executedSeeders as $seeder) {
            $this->info($seeder . '-----------------Seeded');
        }

        foreach ($unSeeders as $seeder) {
            $this->info($seeder . '-----------------Pending');
        }
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
