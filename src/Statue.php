<?php
namespace Sculptor;

class Statue {

    public $title;
    public $content;
    public $timestamp;
    public $name;
    public $categories;
    public $tags;

    public function write($outputDir)
    {
        $timestamp = new \DateTime($this->timestamp);
        $outFile = $outputDir . '/' . $timestamp->format('Y-m-d-') . $this->name . '.html';

        ob_start();
            echo "---\n";
            echo "title: $this->title\n";
            if(count($this->categories) > 0) {
                echo "categories:\n";
                foreach($this->categories as $category) {
                    echo "    - $category\n"; 
                }
            }
            if(count($this->tags) > 0) {
                echo "tags:\n";
                foreach($this->tags as $tag) {
                    echo "    - $tag\n"; 
                }
            }

            echo "\n---\n";
            echo "<p>" . implode("</p>\r\n<p>",explode("\r\n\r\n",$this->content)) . "</p>";
        file_put_contents($outFile, ob_get_clean());
    }
}
