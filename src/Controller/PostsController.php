<?php
namespace App\Controller;


class PostsController extends AppController {

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

    }

    public function view($id = null)
    {
        // /viewにアクセス

        $title = 'Cake Blog';
        // 複数の変数を渡したい場合
        $this->set(compact(['id', 'title']));

        // 読み込みたいviewファイルを指定する場合
        $this->render('index');

        
    }
}