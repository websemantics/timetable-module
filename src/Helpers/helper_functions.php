<?php

/**
 * Class TimetableModule Helper Functions
 *
 */

 /**
  * Return the current module instance
  *
  * @param    string $namespace
  * @return   Module
  */

  if (!function_exists('module')) {
    function module($namespace = 'websemantics.module.timetable')
    {
        return app('Anomaly\Streams\Platform\Addon\Module\ModuleCollection')->get($namespace);
    }
  }

  /**
   * Return the current module's namespace
   *
   * @param    string $key
   * @return   string
   */

   if (!function_exists('moduleNamespace')) {
     function moduleNamespace($key = null)
     {
       return module()->getNamespace($key);
     }
   }

   /**
    * Return the current module's path
    *
    * @param    string path
    * @return   string
    */

    if (!function_exists('modulePath')) {
      function modulePath($path = null)
      {
        return module()->getPath($path);
      }
    }

    /**
     * Return a module's view
     *
     * @param    string $namespace
     * @return   Module
     */

     if (!function_exists('moduleView')) {
       function moduleView($view, $data = [])
       {
         return view(moduleNamespace($view), $data);
       }
     }
