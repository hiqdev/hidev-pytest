<?php

/*
 * pytest plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-pytest
 * @package   hidev-pytest
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' =>  [
        'config' => [
            'pytest' => [
                'class' => \hidev\pytest\console\PytestController::class,
            ],
            'binaries' => [
                'pytest' => [
                    'class' => \hidev\base\BinaryPython::class,
                    'package' => 'pytest',
                ],
                'coverage' => [
                    'class' => \hidev\base\BinaryPython::class,
                    'package' => 'coverage',
                ],
            ],
            'vcsignore' => [
                '.coverage' => 'test coverage',
            ],
        ],
    ],
];
