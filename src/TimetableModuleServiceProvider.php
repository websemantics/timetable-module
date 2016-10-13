<?php

namespace Websemantics\TimetableModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
/**
 * Class TimetableModuleServiceProvider
 *
 *
 * @package   Websemantics\TimetableModule
 */
class TimetableModuleServiceProvider extends AddonServiceProvider
{
    protected $plugins = [];
    protected $routes = ['admin/timetable' => 'Websemantics\TimetableModule\Http\Controller\Admin\TimetablesController@index', 'admin/timetable/timetables' => 'Websemantics\TimetableModule\Http\Controller\Admin\TimetablesController@index', 'admin/timetable/timetables/create' => 'Websemantics\TimetableModule\Http\Controller\Admin\TimetablesController@create', 'admin/timetable/timetables/edit/{id}' => 'Websemantics\TimetableModule\Http\Controller\Admin\TimetablesController@edit'];
    protected $bindings = ['Websemantics\TimetableModule\Timetable\Timetable\TimetableModel' => 'Websemantics\TimetableModule\Timetable\Timetable\TimetableModel'];
    protected $middleware = [];
    protected $listeners = [];
    protected $providers = [];
    protected $singletons = ['Websemantics\TimetableModule\Timetable\Timetable\Contract\TimetableRepositoryInterface' => 'Websemantics\TimetableModule\Timetable\Timetable\TimetableRepository'];
    protected $overrides = [];
    protected $mobile = [];
    protected $commands = [];
    /**
     * Get the addon view overrides.
     *
     * @return array
     */
    public function getOverrides()
    {
      $request = app('Illuminate\Http\Request');
      $view = $request->get('view');

      if ($request->segment(2) === $this->addon->getSlug() &&
          $view !== 'table') {
        return [
          'streams::table/partials/header' => 'websemantics.module.timetable::admin/table/partials/header',
          'streams::table/partials/body' => 'websemantics.module.timetable::admin/table/partials/body'
        ];
      }

      return parent::getOverrides();
    }
}
