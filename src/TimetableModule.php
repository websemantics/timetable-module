<?php

namespace Websemantics\TimetableModule;

use Anomaly\Streams\Platform\Addon\Module\Module;
/**
 * Class TimetableModule
 *
 *
 * @package   Websemantics\TimetableModule
 */
class TimetableModule extends Module
{
    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = "fa fa-calendar";
    protected $sections = ['timetables' => ['href' => 'admin/timetable/timetables', 'buttons' => ['create']]];
}