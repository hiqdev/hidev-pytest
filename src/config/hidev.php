<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' =>  [
        'config' => [
            'pytest' => [
                'class' => \hidev\phpunit\console\PytestController::class,
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
        ],
    ],
];
