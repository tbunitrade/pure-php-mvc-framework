<?php

class Pages extends Controller {
    public function __construct() {
        //echo 'pages loaded';
        $this->postModel = $this->model('Post');
    }

    public function index() {
        //echo 'pages index';
        //$this -> view('Hello');
        $posts = $this->postModel->getPosts();

        $data = [
            'title' => 'Welcome',
            'post_title'=> 'My practice',
            'posts' => $posts
        ];


        $this->view('pages/index',$data);
    }

    public function  about() {
        $data = [
            'title' => 'About Us page',
            'post_title'=> 'About the game'
        ];
        //echo 'This is about';
        $this->view('pages/about',$data);

    }
}