<?php
require_once 'model/post.php';
require_once 'model/comment.php';
// require_once 'SiteController.php';
/**
*
*/
class PostController
{
    public $data;
    public $action;
    public $smarty;
    public $post;
    public $comment;

    public $thisPostId;

    private $role;

    function __construct($data, $action, $smarty)
    {
        $this->data = $data;
        $this->action = $action;
        $this->smarty = $smarty;
        $this->post = new Post($this->data);
        $this->comment = new Comment($this->data);

        // $this->$action();

        if (isset($_SESSION['logged_user'])) {
            $this->role = $_SESSION['logged_user']->user_type;
            $this->$action();
        } else {
            $this->smarty->display('errors/error_login.tpl');
        }
    }

    public function index(){
        $this->smarty->display('post/index.tpl');
    }

    public function read(){
        $this->smarty->assign('posts', $this->post->listPosts());
        $this->smarty->assign('include', 'post/read.tpl');
        $this->smarty->display('post/index.tpl');
    }

    public function create(){
        $this->thisPostId = $this->post->getOnePost();
        // $this->smarty->assign('comments', $this->comment->getAllComments($this->thisPostId));

        if ($this->role == 0) {
            if (!isset($this->data['create_comment'])) {
                $this->smarty->assign('message_comment', 'Заполните все поля формы');
            } else {
                if ($this->comment->createComment($this->thisPostId)) {
                    $this->smarty->assign('message_comment', 'Успешно');
                } else {
                    $this->smarty->assign('message_comment', 'Ошибка');
                }
            }

            $this->smarty->assign('posts', $this->post->getAllPosts());
            // $this->smarty->assign('comments', $this->comment->getAllComments($this->thisPostId));
            $this->smarty->assign('form_name', 'Рецепт');
            $this->smarty->assign('comment_name', 'Задайте вопрос');
            // $this->smarty->assign('include', 'post/create.tpl');
            // $this->smarty->display('post/index.tpl');

        } elseif ($this->role == 1) {
            if (!isset($this->data['create_post'])) {
                $this->smarty->assign('message_post', 'Заполните все поля формы');
            } else {
                if ($this->post->createPost()) {
                    $this->smarty->assign('message_post', 'Успешно');
                } else {
                    $this->smarty->assign('message_post', 'Ошибка');
                }
            }

            if (!isset($this->data['create_comment'])) {
                $this->smarty->assign('message_comment', 'Заполните все поля формы');
            } else {
                if ($this->comment->createComment($this->thisPostId)) {
                    $this->smarty->assign('message_comment', 'Успешно');
                } else {
                    $this->smarty->assign('message_comment', 'Ошибка');
                }
            }

            $this->smarty->assign('patients', $this->post->typeSelection());
            // $this->smarty->assign('comments', $this->comment->getAllComments($this->thisPostId));

            $this->smarty->assign('form_name', 'Форма создания рецепта');
            $this->smarty->assign('comment_name', 'Ответ');
            // $this->smarty->assign('include', 'post/create.tpl');
            // $this->smarty->display('post/index.tpl');

        } else {
            $this->smarty->display('errors/error_access.tpl');
        }

        $this->smarty->assign('comments', $this->comment->getAllComments($this->thisPostId));
        $this->smarty->assign('include', 'post/create.tpl');
        $this->smarty->display('post/index.tpl');

        // if (!isset($this->data['create_post'])) {
        //     $this->smarty->assign('message_post', 'Заполните все поля формы');
        // } else {
        //     if ($this->post->createPost()) {
        //         $this->smarty->assign('message_post', 'Успешно');
        //     } else {
        //         $this->smarty->assign('message_post', 'Ошибка');
        //     }
        // }
        // $this->smarty->assign('patients', $this->post->typeSelection());
        // $this->smarty->assign('include', 'post/create.tpl');
        // $this->smarty->display('post/index.tpl');
    }
    //
    // public function delete(){
    //
    // }
    //
    // public function update(){
    //
    // }
}
?>
