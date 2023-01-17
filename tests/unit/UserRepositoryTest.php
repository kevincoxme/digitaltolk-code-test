<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    /**
     * Test createOrUpdate
     * 
     * @covers \App\Repository\UserRepository
     * @dataProvider userRepositoryDataProvider
     * @test
     */
    public function createOrUpdate(array $params, ?array $expected)
    {
        $repository = new UserRepository(User::class);
        $this->assertSame($repository->createOrUpdate($params['id'], $params['request']), $expected[0])
    }

    public function userRepositoryDataProvider(): array
    {
        return [
            [
                [
                    'id' => null,
                    'request' => [
                        'role'                  => 'customer',
                        'name'                  => 'John Doe',
                        'company_id'            => 1,
                        'department_id'         => 1,
                        'email'                 => 'john.doe@example.com',
                        'dob_or_orgid'          => '1996-03-23',
                        'phone'                 => '+7639923',
                        'mobile'                => '+64187372834',
                        'password'              => 'password',
                        'consumer_type'         => '',
                        'additional_info'       => '',
                        'user_id'               => '',
                        'username'              => '',
                        'city'                  => '',
                        'town'                  => '',
                        'country'               => '',
                        'reference'             => '',
                        'cost_place'            => '',
                        'fee'                   => '',
                        'time_to_charge'        => '',
                        'time_to_pay'           => '',
                        'charge_ob'             => '',
                        'customer_id'           => '',
                        'charge_km'             => '',
                        'maximum_km'            => '',
                        'translator_ex'         => '',
                        'translator_type'       => '',
                        'worked_for'            => '',
                        'organization_number'   => '',
                        'gender'                => '',
                        'translator_level'      => '',
                        'additional_info'       => '',
                        'post_code'             => '',
                        'address'               => '',
                        'address_2'             => '',
                        'town'                  => '',
                    ]
                ],
                [new User()]
            ],
            
            [
                [
                    'id' => 1,
                    'request' => [
                        'role'                  => 'customer',
                        'name'                  => 'John Doe Edited',
                        'company_id'            => 1,
                        'department_id'         => 1,
                        'email'                 => 'john.doe@example.com',
                        'dob_or_orgid'          => '1996-03-23',
                        'phone'                 => '+7639923',
                        'mobile'                => '+64187372834',
                        'password'              => 'password',
                        'consumer_type'         => '',
                        'additional_info'       => '',
                        'user_id'               => '',
                        'username'              => '',
                        'city'                  => '',
                        'town'                  => '',
                        'country'               => '',
                        'reference'             => '',
                        'cost_place'            => '',
                        'fee'                   => '',
                        'time_to_charge'        => '',
                        'time_to_pay'           => '',
                        'charge_ob'             => '',
                        'customer_id'           => '',
                        'charge_km'             => '',
                        'maximum_km'            => '',
                        'translator_ex'         => '',
                        'translator_type'       => '',
                        'worked_for'            => '',
                        'organization_number'   => '',
                        'gender'                => '',
                        'translator_level'      => '',
                        'additional_info'       => '',
                        'post_code'             => '',
                        'address'               => '',
                        'address_2'             => '',
                        'town'                  => '',
                    ]
                ],
                [User::find(1)]
            ]
        ];
    }

}
    