<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $session = session();
        $data['sessData'] = $session->get();

        return $this->loadView('profile', $data);
    
    }
    public function getUserId() {
        $user_id = session('user_id');
        $user = new UserModel();

        echo json_encode($user->find($user_id));
    }

    public function update() {
        $user_id = session('user_id');
        $user = new UserModel();
        $user->where('user_id', $user_id);
        $data = [
            'username'            => $this->request->getVar('username'),
            'user_first_name'     => $this->request->getVar('user_first_name'),
            'user_last_name'      => $this->request->getVar('user_last_name')
        ];

        $user->update($user_id, $data);

        echo json_encode([
            'success' => true,
            'message' => 'Your account is successfully updated!'
        ]);
    }

    public function change_pass() {
        $user_id = session('user_id');
        $user = new UserModel();
        $user->where('user_id', $user_id);

        $currentPass = $this->request->getVar('user_password');
        $newPass = $this->request->getVar('new_password');
        $confimPass = $this->request->getVar('confirm_password');

        if (!password_verify($currentPass, $user->user_password)) {
            $data["success"] = false;
            $data["error"] = "Current Password is incorrect.";
        }
        else if ($newPass != $confimPass) {
            $data["success"] = false;
            $data["error"] = "New password and confirm new password doesn't match.";
        }
        else {
            $user->update($user_id, password_hash($newPass, PASSWORD_DEFAULT));
            $data["success"] = true;
        }

        echo json_encode([
            'success' => true,
            'message' => 'Your password is successfully changed!'
        ]);
    }
}