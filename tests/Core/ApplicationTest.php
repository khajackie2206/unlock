<?php

declare(strict_types=1);

namespace Khanguyennfq\Unlock\tests\Core;

use Khanguyennfq\Unlock\Core\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * @dataProvider getProvider
     * @return void
     */
    public function testGetRun()
    {

    }
    public function testSum($params, $expected)
    {
        $result = Application::get($params['number1'], $params['number2']);
        $this->assertEquals($expected, $result);

    }

    /**
     * @return array[]
     */
    public function getProvider(): array
    {
        return [
            'case-with-2-plus-3' => [
                'params' => [
                    'number1' => 2,
                    'number2' =>3
                ],
                'expected' => 5
            ],
            'case-with-1-plus-8' => [
                'params' => [
                    'number1' => 1,
                    'number2' => 8,
                ],
                'expected' => 9
            ],
            'case-with-0-plus-0' => [
                'params' => [
                    'number1' => 0,
                    'number2' => 0
                ],
                'expected' => 0
            ]
        ];
    }
}
