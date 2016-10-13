<?php namespace Websemantics\TimetableModule\Timetable\Timetable\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class TimetableFormBuilder
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\TimetableModule\Timetable\Timetable\Form
 */

class TimetableFormBuilder extends FormBuilder
{

    /**
     * Fields to skip.
     *
     * @var array
     */
     protected $skips = [];

    /**
     * The form actions.
     *
     * @var array
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
						'start',
						'end',];
}
