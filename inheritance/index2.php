<?php

class Collection {
    protected  $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key) {
        return array_sum(array_column($this->items, $key));
    }
}

class VideoCollection extends Collection {
    public function length() {
        return $this->sum('length');
    }
}

class Video {
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


$videos = new VideoCollection([
    new Video('Some video', 100),
    new Video('Some video 2', 200),
    new Video('Some video 3', 300),
]);

echo $videos->length();

