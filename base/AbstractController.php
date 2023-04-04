<?php
namespace Base;

class AbstractController 
{
    protected $view;

    public function setView(View $view) 
    {
        $this->view = $view;
    }
}