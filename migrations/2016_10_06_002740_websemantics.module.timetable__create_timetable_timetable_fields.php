<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WebsemanticsModuleTimetableCreateTimetableTimetableFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
				'start'                       => 'anomaly.field_type.datetime',
				'end'                         => 'anomaly.field_type.datetime',
		];

}
