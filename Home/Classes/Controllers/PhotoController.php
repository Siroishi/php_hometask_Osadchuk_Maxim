<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;

class PhotoController implements ControllerMethodName
{

    /**
     * @return void
     */
    public function index(): void
    {
        $list = $this->loadImages();
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/photo.php';
    }

    function loadImages() : array{
        $images = scandir('images/photos');
        $images = array_filter($images, function ($item) {
           return  ($item !== '.' && $item !== '..');
        });
        $DS = DIRECTORY_SEPARATOR;
        $path = $DS.'images'.$DS.'photos'.$DS;

        $images_path = [];
        foreach ($images as $imageName){
            $images_path[] = $path.$imageName;
        }
        return $images_path;
    }
}
