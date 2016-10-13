<?php namespace Websemantics\TimetableModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class TimetableController
 *
 *
 * @package   Websemantics\TimetableModule\Http\Controller\Admin
 */

class TimetableController extends AdminController
{
  /**
   * Return admin home view.
   *
   * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
   */
  public function index()
  {
    return moduleView('admin.home', ['readme' => strip_tags(file_get_contents(modulePath('README.md')))]);
  }
}
