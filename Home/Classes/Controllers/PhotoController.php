<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class PhotoController implements ControllerMethodName
{

    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $list = $this->loadImages();
        $data = ['title' => 'Photos', 'list' => $list];
        new SmartyRendering('templates/default/photo.tpl', $data);
    }

    function loadImages() : array{
        $images = scandir('images/photos');
        $images = array_filter($images, function ($item) {
            return  ($item !== '.' && $item !== '..');
        });
        return array_map(function ($item) {
            return '/images/photos/' . $item;
        }, $images);
    }
}
