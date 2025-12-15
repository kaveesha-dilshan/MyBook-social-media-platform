<?php 

class Post{

    private $error ="";

    public function create_post($user_id,$data){

        if(!empty($data['post'])){

            $post = addslashes($data['post']);
            $postid = $this->create_postid();

            $qurey = "insert into posts (user_id, postid, post) values ('$user_id', '$postid', '$post')";

            $DB = new Database();
            $DB->save($qurey);

        }else{
            $this->error .= "Please write somthing!<br>";
        }

        return $this->error;
    }

    public function get_posts($id){

        $qurey = "select * from posts where user_id = '$id' order by id desc limit 10";

        $DB = new Database();
        $result = $DB->read($qurey);

        if($result){
            return $result;
        }else{
            return false;
        }
    }
    private function create_postid() {
 
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