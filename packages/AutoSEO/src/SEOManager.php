<?php

namespace AutoSEO;

class SEOManager
{
    protected $title;
    protected $description;
    protected $keywords;
    protected $image;

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function generate()
    {
        return view('seo::meta', [
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'image' => $this->image,
        ])->render();
    }
}