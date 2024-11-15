<?php

class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    //setter function
    public function publish()
    {
        $this->published = true;
    }

    //getter function
    public function isPublished()
    {
        return $this->published;
    }
}


$article1 = new Article('My first post', 'this is first article post');
$article2 = new Article('My second post', 'this is second article post');

$article1->publish();
echo $article1->isPublished();

var_dump($article1);
var_dump($article2);
