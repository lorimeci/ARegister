<?php
class AuthModel
{
    public $db;

    public function checkLogin($email, $password)
    {
        $sql = "SELECT count(*) FROM  users WHERE email='{$email}'AND pwd='{$password}'";
        $stmt = $this->db->prepare($sql)->execute();
        return $stmt;
    }
    public function checkRegister($name, $phone, $email, $password, $confirmpassword)
    {

        $sql = "INSERT INTO users (name,phone,email,pwd,confirmpwd) VALUES('" . $name . "','" . $phone . "','" . $email . "','" . $password . "','" . $confirmpassword . "')";
        $this->db->query($sql);
        return 1;
    }

    public function isUserExists($email)
    {
        $checkUser = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $result = $this->db->query($checkUser);
        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function confirmPassword($password, $confirmpassword)
    {
        if ($password == $confirmpassword) {
            return true;
        } else {
            return false;
        }
    }
    public function isPhone($phone)
    {
        $checkUser = "SELECT phone FROM users WHERE phone='$phone' LIMIT 1";
        $result = $this->db->query($checkUser);
        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
