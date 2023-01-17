<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class TeHelperTest extends TestCase
{
    /**
     * Test will expire at
     * 
     * @covers \App\Helpers\TeHelper
     * @dataProvider willExpireAtDataProvider
     * @test
     */
    public function willExpireAt(array $params, ?array $expected)
    {
        $expireAt = TeHelper::willExpireAt($params['due_time'], $params['created_at']);
        $this->assertSame($expireAt, $expected[0])
    }

    public function willExpireAtDataProvider(): array
    {
        return [
            [
                [
                    'due_time' => '2023-01-18 12:25:00',
                    'created_at' => '2023-01-15 11:00:00'
                ],
                ['2023-01-18 12:25:00']
            ],
            [
                [
                    'due_time' => '2023-01-17 11:00:00',
                    'created_at' => '2023-01-17 09:00:00'
                ],
                ['2023-01-17 12:30:00']
            ],
            [
                [
                    'due_time' => '2023-01-17 11:00:00',
                    'created_at' => '2023-01-17 09:00:00'
                ],
                ['2023-01-18 01:00:00']
            ],
            [
                [
                    'due_time' => '2023-01-17 11:00:00',
                    'created_at' => '2023-01-20 09:00:00'
                ],
                ['2023-01-15 11:00:00']
            ]
        ];
    }

}
    