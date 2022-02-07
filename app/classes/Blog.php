<?php
namespace App\classes;
class Blog
{

    protected $blogs;

    public function getAllBlog()
    {
        return
        [
            0=> [
                'title' => 'A New Blog',
                'description'  => 'Blog Description',
                'author' => 'Imam',
                'image' => '1.png',
            ],
            1=> [
                'title' => 'Another Blog',
                'description'  => 'another Blog Description',
                'author' => 'Rafan',
                'image' => 'p2.jpg',
            ],
            3=> [
                'title' => 'A New Port',
                'description'  => 'Port Description',
                'author' => 'Imam',
                'image' => 'a3.jpg',
            ],
        ];
    }

}