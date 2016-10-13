<?php namespace Websemantics\TimetableModule\Timetable\Timetable;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class TimetablePlugin
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\TimetableModule\Timetable\Timetable
 */

class TimetablePlugin extends Plugin
{

    /**
     * The timetable repository.
     *
     * @var TimetableRepository
     */
    protected $timetables;

    /**
     * Create a new TimetablePlugin instance.
     *
     * @param TimetableRepository $timetables
     */
    public function __construct(TimetableRepository $timetables)
    {
        $this->timetables = $timetables;
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {

    }
}
