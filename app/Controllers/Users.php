<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Gabriel Saulo', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Gigi Murin', 'role' => 'Cashier'],
            ['username' => 'staff01', 'full_name' => 'Cecilia Immergreen', 'role' => 'Staff'],
            ['username' => 'cashier02', 'full_name' => 'Raora Panthera', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Elizabeth Rose Bloodflame', 'role' => 'Manager'],
        ];

        return view('pos/users', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
