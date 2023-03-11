<?php
namespace App\Controller;


class PostsController extends AppController {

    // pagination
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Posts.created' => 'desc'
        ]
    ];

    // Controllerの初期化時に呼ばれる
    public function initialize(): void
    {
        // 親のinitializeも実行する
        parent::initialize();

        // デフォルトのレイアウトをOFF
        // $this->viewBuilder()->disableAutoLayout();

        // デフォルトのレイアウトを変更
        $this->viewBuilder()->setLayout('test');
    }
    public function index()
    {
        // /postsにアクセス

        $posts = $this->paginate($this->Posts->find());
        // dd($posts->toArray());

        // dd($posts->toArray());
        $this->set(compact('posts'));

    }

    public function view($id = null)
    {
        // /viewにアクセス

        $post = $this->Posts->get($id);
        $this->set(compact(['post']));
    }
}