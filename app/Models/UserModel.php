<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'akun';
    protected $allowedFields = ['email_user', 'nama_user', 'password'];
    
    public function getUser($username) {
        return $this->where(['nama_user' => $username])->first();
    }
    public function getEmail($email) {
        return $this->where(['email_user' => $email])->first();
    }
}

?>