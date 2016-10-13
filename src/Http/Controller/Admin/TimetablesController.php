<?php namespace Websemantics\TimetableModule\Http\Controller\Admin;

use Websemantics\TimetableModule\Timetable\Timetable\Form\TimetableFormBuilder;
use Websemantics\TimetableModule\Timetable\Timetable\Table\TimetableTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Routing\Redirector;

/**
 * Class TimetableController
 *
 * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. &lt;info@websemantics.ca&gt;
 * @author    Adnan M.Sagar, PhD. &lt;adnan@websemantics.ca&gt;
 * @package   Websemantics\TimetableModule\Http\Controller\Admin
 */

class TimetablesController extends AdminController
{

    /**
     * Redirect to timetables.
     *
     * @param Redirector $redirector
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(Redirector $redirector)
    {
        return $redirector->to('admin/timetable/timetables');
    }

    /**
     * Return an index of existing entries.
     *
     * @param TimetableTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(TimetableTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param TimetableFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(TimetableFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param TimetableFormBuilder $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(TimetableFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
