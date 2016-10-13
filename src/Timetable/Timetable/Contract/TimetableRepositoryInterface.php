<?php namespace Websemantics\TimetableModule\Timetable\Timetable\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface TimetableRepositoryInterface
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\TimetableModule\Timetable\Timetable\Contract
 */

interface TimetableRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Truncate timetable.
     *
     * @return static
     */
    public function truncate();

    /**
     * Create a new timetable.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

}
