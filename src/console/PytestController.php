<?php

/*
 * pytest plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-pytest
 * @package   hidev-pytest
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\pytest\console;

/**
 * Goal for Pytest.
 */
class PytestController extends \hidev\controllers\CommonController
{
    protected $_version;

    public $coverage;

    public function actionMake()
    {
        return $this->coverage ? $this->actionCoverage() : $this->actionRun();
    }

    public function actionCoverage()
    {
        $args = ['run', '-m', 'pytest'];

        return $this->passthru('coverage', $args);
    }

    public function actionRun()
    {
        $args = [];

        return $this->passthru('pytest', $args);
    }

    public function getVersion()
    {
        if ($this->_version === null) {
            $lines = $this->exec('phpunit', ['--version']);
            $a = explode(' ', $lines[0], 6)[4];
            $this->_version = $a;
        }

        return $this->_version;
    }
}
