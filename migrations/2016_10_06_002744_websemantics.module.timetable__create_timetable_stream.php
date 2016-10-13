<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleTimetableCreateTimetableStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
				'slug'                        => 'timetable',
				'title_column'                => 'start'
		];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
				'start'                         ,
				'end'                           
		];

}
