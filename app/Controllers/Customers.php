<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Ada Mesmer', 'email' => 'psychiatrist@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Frederick Kreiburg', 'email' => 'composer@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Richard Sterling', 'email' => 'knight@example.com', 'phone' => '0919-345-6789'],
            ['full_name' => 'Evelyn Mora', 'email' => 'farolady@example.com', 'phone' => '0920-456-7890'],
            ['full_name' => 'Emil Mesmer', 'email' => 'patient@example.com', 'phone' => '0921-567-8901'],
        ];

        return view('pos/customers', [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
