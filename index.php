<?php
    class Movie {
        public $title;
        public $vote;

        function __construct($_title, $_vote) {
            $this->title = $_title;
            $this->vote = $_vote;
        }

        public function getVote() {
            return $this->vote = $_vote; 
        }
    }
?>