<?php
class notfound_controller extends Controller
{
    function index_action()
    {
        $this->view->generate('notfound_view.php', 'layout.php');
    }
}
