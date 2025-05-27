<?php

class Model_user {
    protected $users = [
        [
            'username' => 'admin',
            'password' => '1234', // sebaiknya hash di versi produksi
            'role'     => 'admin'
        ],
        [
            'username' => 'kasir',
            'password' => '5678',
            'role'     => 'kasir'
        ]
    ];

    public function getUser($username) {
        foreach ($this->users as $user) {
            if ($user['username'] === $username) {
                return $user;
            }
        }
        return null;
    }
}
