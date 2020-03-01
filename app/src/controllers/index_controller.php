<?php
class index_controller extends Controller
{
    function index_action()
    {
        $this->view->generate('index_view.php', 'layout.php');
    }
}
