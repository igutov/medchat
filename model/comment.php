<?php
class Comment
{
    public $commentData = array();
    public $errors = array();

    function __construct($data)
    {
        foreach ($data as $key => &$value) {

            $value = trim($value);
            $value = htmlspecialchars($value, ENT_QUOTES);
            $value = strip_tags($value);

        }
        $this->commentData = $data;
    }

    function getAllComments($comments_id){
        return R::findAll('comments', 'post_id = ?', [$comments_id]);
    }

    function createComment($post_id){

        $comments = R::dispense( 'comments' );
        $posts = R::findOne('posts', 'ORDER BY patient_id = ? DESC LIMIT 1', [$post_id]);

        $comments['post'] = $posts;
        // $comments['date'] = date("Y-m-d H:i:s");
        foreach ($this->commentData as $key => $value) {
            // if ($key == 'posts') {

            // } else {
            $comments[$key] = $value;

            // }
        }
        R::store( $comments );
        return true;
    }
}
?>
