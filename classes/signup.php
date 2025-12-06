<?php

class Signup{

    private $error = "";
    public function evaluate($data){

        foreach($data as $key => $value){
            if(empty($value)){
                $this->error = $this->error . $key . "is Empty!<br>";
            }

            if($key == "email"){
                if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/", $value)){
                    $this->error = $this->error . "Inavaild Email address!<br>";
                }
                
            }

            if($key == "first_name"){
                if (is_numeric($value)){
                    $this->error = $this->error . "first name cannot be number!<br>";
                }

                if (strstr($value," ")){
                    $this->error = $this->error . "first name cannot have spaces!<br>";
                }
                
            }

            if($key == "last_name"){
                if (is_numeric($value)){
                    $this->error = $this->error . "last name cannot be number!<br>";
                }
                
                if (strstr($value," ")){
                    $this->error = $this->error . "last name cannot have spaces!<br>";
                }
                
            }
        }
    

        if($this->error == ""){
            // no error
            $this->create_user($data);

        }else{
            return $this->error;
        }
    }
    public function create_user($data)
    {
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];

        // create these
        $url_address = strtolower($first_name) . "." . strtolower($last_name);
        $user_id = $this->create_userid() ;

        $query = "insert into users 
        (user_id,first_name,last_name,gender,email,password,url_address)
        values
        ('$user_id','$first_name','$last_name','$gender','$email','$password','$url_address')";

        echo $query;

        $DB = new Database();
        $DB->save($query);
    }


    private function create_userid() {

        $length = rand(4,19);
        $number = "";
        for($i = 0; $i<$length; $i++){
            $new_rand = rand(0,9);

            $number = $number . $new_rand;
        }
        return $number;
    }
}
















?>