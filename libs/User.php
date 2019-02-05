<?php

class User
{
    public static $table = 'users';


    public static function register($data)
    {
        $errors = self::validate('register', $data);
        if(!is_array($errors)) {
            $table = self::$table;

            $type = $data['user_type'];
            $first_name = $data['first_name'];
            $second_name = $data['second_name'];
            $email = $data['email'];
            $username = $data['username'];
            $password = md5($data['password']);
            $address = $data['address'];
            $gender = $data['gender'];
            $birthday = $data['birthday'];
            $hobbies = json_encode($data['hobbies']);

            $sql ="INSERT INTO $table
              (type, first_name, second_name, email, username, password, address, gender, hobbies)
              VALUES($type, '$first_name', '$second_name', '$email', '$username', '$password', '$address', $gender, '$hobbies')";
            $result = DB::getInstance()->query($sql);
            return $result;
        } else {
            return [
                'status' => 'validation_errors',
                'errors' => $errors
            ];
        }
    }

    public static function login($data)
    {

    }

    public static function logout()
    {
        session_destroy();
        header('Location: /');
    }

    /**
     * @param string $type
     * @param array $data
     * @return array
     */
    public static function validate($type, $data)
    {
        return true;
        if(empty($data)) {
            return ['data is empty'];
        }
        foreach ($data as $name => $value) {
            switch ($name) {
                case 'user_type' :
                    break;
                case 'first_name' :
                    break;
                case 'second_name' :
                    break;
                case 'email' :
                    break;
                case 'username' :
                    break;
                case 'password' :
                    break;
                case 'password_confirm' :
                    break;
                case 'address' :
                    break;
                default :
                    break;
            }
        }

    }
}