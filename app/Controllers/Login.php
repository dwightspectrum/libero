<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {   
        if(session()->get('logged_in')){
            return redirect()->to('/'); 
        }else{
            return view('login');
        }
    }

    public function register(){
        return view('register');
    }

    public function create(){
        $user = new UserModel();
        $exists = $user->where('username', $this->request->getVar('username'))->first();

        if($exists){
            echo json_encode(array('success' => false, 'message' => 'Username already exists!'));
        }else{
            $data = [
                'username'            => $this->request->getVar('username'),
                'user_first_name'     => $this->request->getVar('user_first_name'),
                'user_last_name'      => $this->request->getVar('user_last_name'),
                'user_password'       => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $user->save($data);
            
            echo json_encode(array('success' => true, 'message' => 'Your account is successfully created!')); 
        }
    }

    public function auth()
    {
        $session = session();
        $user = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $user->where('username', $username)->first();

        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $user_data = [
                    'user_id'            => $data['user_id'],
                    'username'           => $data['username'],
                    'user_first_name'    => $data['user_first_name'],
                    'user_last_name'     => $data['user_last_name'],
                    'logged_in'          => TRUE
                ];

                $session->set($user_data);

                echo json_encode(array('success' => true, 'message' => 'You have successfully logged in!'));
            }else{
                echo json_encode(array('success' => false, 'message' => 'Your password is incorrect!'));
            }
        }else{
            echo json_encode(array('success' => false, 'message' => 'Your username does not exists!'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/');
    }
}
