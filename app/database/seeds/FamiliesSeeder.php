<?php

use YouthSkillsCenter\Auth\Permission;
use YouthSkillsCenter\Auth\Role;
use YouthSkillsCenter\Auth\User;

class FamiliesSeeder extends Seeder {

    public function run() {

        $families = [
            [
                'family_key' => 'BRO-1031',
                'nickname' => 'The Brown Family',
                'children' => [
                    ['first_name' => 'Jasmine', 'last_name' => 'Brown', 'weekly_tuition' => '5000']
                ]
            ],
            [
                'family_key' => 'CAM-1029',
                'nickname' => 'Terelie & Cindy Camarena',
                'children' => [
                    ['first_name' => 'Terelie', 'last_name' => 'Camarena', 'weekly_tuition' => '17083'],
                    ['first_name' => 'Cindy', 'last_name' => 'Camarena', 'weekly_tuition' => '17083']]],
            [
                'family_key' => 'DEL-1014',
                'nickname' => 'Eric & Vincent DeLeon',
                'children' => [
                    ['first_name' => 'Eric', 'last_name' => 'DeLeon', 'weekly_tuition' => '9123'],
                    ['first_name' => 'Vincent', 'last_name' => 'DeLeon', 'weekly_tuition' => '9123']
                ]
            ],
            [
                'family_key' => 'GAR-1016',
                'nickname' => 'The Garcia Family',
                'children' => [
                    ['first_name' => 'Dominic', 'last_name' => 'Garcia', 'weekly_tuition' => '14131']
                ]
            ],
            [
                'family_key' => 'GOM-1002',
                'nickname' => 'The Gomez Family',
                'children' => [
                    ['first_name' => 'Aidan', 'last_name' => 'Gomez', 'weekly_tuition' => '15500']
                ]
            ],
            [
                'family_key' => 'GON-1030',
                'nickname' => 'The Gonzalez Family',
                'children' => [
                    ['first_name' => 'Angel', 'last_name' => 'Gonzalez', 'weekly_tuition' => '9123'],
                    ['first_name' => 'Yaretzy', 'last_name' => 'Gonzalez', 'weekly_tuition' => '9123'],
                    ['first_name' => 'Priscilla', 'last_name' => 'Gonzalez', 'weekly_tuition' => '9123']
                ]
            ],
            [
                'family_key' => 'KOT-1028',
                'nickname' => 'The Kotlar Family',
                'children' => [
                    ['first_name' => 'Brooklin', 'last_name' => 'Kotlar', 'weekly_tuition' => '9500']
                ]
            ],
            [
                'family_key' => 'MAR-1018',
                'nickname' => 'The Martinez Family',
                'children' => [
                    ['first_name' => 'Emmanuel', 'last_name' => 'Martinez', 'weekly_tuition' => '15000']
                ]
            ],
            [
                'family_key' => 'MAR-1034',
                'nickname' => 'Julian & Isabella Martinez',
                'children' => [
                    ['first_name' => 'Julian', 'last_name' => 'Martinez', 'weekly_tuition' => '14131'],
                    ['first_name' => 'Isabella', 'last_name' => 'Martinez', 'weekly_tuition' => '14131']
                ]
            ],
            [
                'family_key' => 'OWE-1027',
                'nickname' => 'The Owens Family',
                'children' => [
                    ['first_name' => 'Dakota', 'last_name' => 'Owens', 'weekly_tuition' => '5000']
                ]
            ],
            [
                'family_key' => 'RAM-1011',
                'nickname' => 'The Ramirez Family',
                'children' => [
                    ['first_name' => 'Alex', 'last_name' => 'Ramirez', 'weekly_tuition' => '12500']
                ]
            ],
            [
                'family_key' => 'ROD-1012',
                'nickname' => 'The Rodriguez Family',
                'children' => [
                    ['first_name' => 'Aubrie', 'last_name' => 'Rodriguez', 'weekly_tuition' => '9000']
                ]
            ],
            [
                'family_key' => 'TAP-1032',
                'nickname' => 'Isaac Zuniga',
                'children' => [
                    ['first_name' => 'Isaac', 'last_name' => 'Zuniga', 'weekly_tuition' => '14131']
                ]
            ],
            [
                'family_key' => 'WAI-1501',
                'nickname' => 'The Waits Family',
                'children' => [
                    ['first_name' => 'Cooper', 'last_name' => 'Waits', 'weekly_tuition' => '13500']
                ]
            ],
            [
                'family_key' => 'ZEP-1033',
                'nickname' => 'The Zepeda Family',
                'children' => [
                    ['first_name' => 'Jonathan', 'last_name' => 'Zepeda', 'weekly_tuition' => '15000']
                ]
            ],
        ];

        foreach ($families as $f) {
            $family = \YouthSkillsCenter\Families\Family::create([
                'family_key' => $f['family_key'],
                'nickname' => $f['nickname'],
            ]);


            if (!empty($f['children'])) {
                foreach ($f['children'] as $child) {
                    \YouthSkillsCenter\Families\Child::create([
                        'first_name' => $child['first_name'],
                        'last_name' => $child['last_name'],
                        'weekly_tuition' => $child['weekly_tuition'],
                        'family_id' => $family->id,
                    ]);
                }
            }
        }

    }


} 