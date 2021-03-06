<?php
/**
 * @file
 * Contains Drupal\AppConsole\Test\Generator\GeneratorTest.
 */

namespace Drupal\AppConsole\Test\Generator;

abstract class GeneratorTest extends \PHPUnit_Framework_TestCase 
{
  var $dir;

  public function setUp()
  {
    $this->setUpTemporalDirectory();
    if (!defined('DRUPAL_ROOT')) {
      define('DRUPAL_ROOT', getcwd());
    }
  }

  public function setUpTemporalDirectory()
  {
    $this->dir = sys_get_temp_dir() . "/modules";
  }

  public function getSkeletonDirs()
  {
    $skeletonDirs = [];
    $skeletonDirs[] = __DIR__.'/../../src/Resources/skeleton';
    $skeletonDirs[] = __DIR__.'/../../src/Resources';

    return $skeletonDirs;
  }

  public function getModulePath($module)
  {
    return $this->dir . '/' . $module;
  }
}
