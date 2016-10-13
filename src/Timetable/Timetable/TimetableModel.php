<?php namespace Websemantics\TimetableModule\Timetable\Timetable;

use Websemantics\TimetableModule\Timetable\Timetable\Contract\TimetableInterface;
use Anomaly\Streams\Platform\Model\Timetable\TimetableTimetableEntryModel;

/**
 * Class TimetableModel
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\TimetableModule\Timetable\Timetable
 */

class TimetableModel extends TimetableTimetableEntryModel implements TimetableInterface
{
    /**
     * Disable timestamps for this model.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The number of minutes to cache query results.
     *
     * @var null|false|int
     */
    protected $ttl = false;

    /**
     * The attributes that are
     * not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Runtime cache.
     *
     * @var array
     */
    protected $cache = [];

}
