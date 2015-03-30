<?php
namespace Sculptor;

class Clay {

    public $input;
    public $output;

    public function __construct($arguments)
    {
        if(count($arguments) < 2) {
            throw new \Exception('No Input File Specified');
        }

        $this->input = realpath($arguments[1]);

        if(!file_exists($this->input)) {
            throw new \Exception('File is invalid');
        }

        if(count($arguments) < 3) {
            throw new \Exception('No Output Directory Specified');
        }

        $this->output = realpath($arguments[2]);

        if(!$this->is_dir_empty($this->output)) {
            throw new \Exception('Directory is not empty, risky!');
        }
    }

    private function is_dir_empty($dir) {
      if (!is_readable($dir)) return NULL; 
      return (count(scandir($dir)) == 2);
    }
}