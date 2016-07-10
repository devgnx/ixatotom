<?php

namespace App\Http\Controllers\Traits;


trait LayoutResolver
{
    protected $viewAttributes = [];

    public function __construct()
    {
        $this->viewAttributes['page'] = array(
            'title' => null,
            'name' => null,
        );

        if (!empty($this->title)) {
            $this->viewAttributes['page']['title'] = $this->title;
        }

        if (!empty($this->page)) {
          $this->viewAttributes['page']['name'] = $this->page;
        }
    }
}
