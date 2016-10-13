<?php

namespace Websemantics\TimetableModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
/**
 * Class TimetableModuleSeeder
 *
 *
 * @package   Websemantics\TimetableModule
 */
class TimetableModuleSeeder extends Seeder
{
    protected $seeders = ['Timetable' => 'Websemantics\TimetableModule\Timetable\Timetable\TimetableSeeder'];
    /**
     * Seed the localization module.
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }
}