<?php

class Like
{
    use SQLGetterSetter;
    public $conn;
    public $table;
    public $id;
    public $data;

    public function __construct(Post $post)
    {
        $userid = 76;
        print("User id is $userid");
        $postid = $post->getID();
        $this->id = md5($userid . "-".$postid);
        $this->conn = db::makeConnection();
        $this->table = 'likes';
        $this->data = null;

        $query = "SELECT * FROM `likes` WHERE `id` = '$this->id'";
        $result = $this->conn->query($query);
        if ($result->num_rows == 1) {
            //Lie entry not founds
        } else {
            $query_insert = "INSERT INTO `likes` (`id`, `user_id`, `post_id`, `like`, `time_stamp`)
            VALUES ('$this->id', '$userid', '$postid', 0, now())";
            $result = $this->conn->query($query_insert);
            if($result){
                 if(!$this->conn->query($query)){
                    throw new Exception("Unable to create like entry");
                 }
            }
        }
    }

    public function toggleLike()
    {
        $liked = $this->getLike();
        if(boolval($liked) == true){
            $this->setLike(0);
        } else {
            $this->setLike(1);
        }
    }

    public function isLiked(){
        return boolval($this->getLike());
    }
}
