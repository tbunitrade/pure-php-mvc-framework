<?php

class Pages extends Controller {
    public function __construct() {

    }

    public function index() {
        $data = [
            'title' => 'Welcome',
            'post_title'=> 'MVC Framework',
        ];

        $this->view('pages/index',$data);
    }

    public function  about() {
        $data = [
            'title' => 'About Us page',
            'post_title'=> 'About the game'
        ];

        $this->view('pages/about',$data);
    }
}