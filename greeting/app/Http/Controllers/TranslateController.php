<?php

namespace app\Http\Controller;

class TranslateController {
    private $dictionary;

    public function __construct() {
        $this->dictionary = array(
            'one' => 'một',
            'two' => 'hai',
            'three' => 'ba',
            'four' => 'bốn',
            'hello' => 'xin chào'
        );
    }

    public function toVietnamese($word) {
        foreach ($this->dictionary as $key => $result) {
            if ($value === $word) {
                return $result;
            };

            return 'No result';
        }
    }
}