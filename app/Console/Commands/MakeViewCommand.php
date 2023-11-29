<?php

use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Command\Command;

class MakeViewCommand extends Command
{
    protected $signature = 'make:view {name} {folder}';

    protected $description = 'Create a new view';

    public function handle()
    {
        $name = $this->argument('name');
        $folder = $this->argument('folder');

        if (!file_exists(resource_path('views/' . $folder))) {
            mkdir(resource_path('views/' . $folder), 0755, true);
        }

        View::make($folder . '.' . $name)->render();

        $this->info('View created successfully.');
    }

}
