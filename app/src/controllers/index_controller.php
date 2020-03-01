<?php
require_once '../src/models/todo_model.php';
class index_controller extends Controller
{
    function index_action()
    {
        // $todo_model = new todo_model();


        $this->view->generate('index_view.php', 'layout.php');
    }
}
