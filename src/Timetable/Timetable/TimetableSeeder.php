<?php namespace Websemantics\TimetableModule\Timetable\Timetable;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class TimetableSeeder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\TimetableModule\Timetable\Timetable
 */

class TimetableSeeder extends Seeder
{

    /**
     * The $timetables seeder data
     *
     * @var array
     */
    protected $data = [
        
    ];

    /**
     * The $timetables repository.
     *
     * @var TimetableRepository
     */
    protected $timetables;

    /**
     * Create a new TimetableSeeder instance.
     *
     * @param TimetableRepository $timetables
     */
    public function __construct(TimetableRepository $timetables)
    {
        $this->timetables = $timetables;
    }

    /**
     * Seed the $timetables.
     */
    public function run()
    {
        $this->timetables->truncate();

       foreach ($this->data as $item){
            $this->timetables->create($item);
       }
    }
}
