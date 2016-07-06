<?php

namespace App\Http\Controllers\Traits;


trait LayoutResolver
{
    protected $data;

    public function __construct()
    {
        $this->data['page'] = array(
            'title' => null,
            'name' => null,
        );

        if (!empty($this->title)) {
            $this->data['page']['title'] = $this->title;
        }

        if (!empty($this->page)) {
          $this->data['page']['name'] = $this->page;
        }
    }
}
