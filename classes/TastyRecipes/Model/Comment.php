<?php

namespace TastyRecipes\Model;


class Comment {
    public $id;
    public $username;
    public $comment;
    public $date;

        public function __construct() {
            $arguments = func_get_args();
            switch(func_num_args()){
              case 3:
                  self::constructWithoutID($arguments[0], $arguments[1], $arguments[2]);
                  break;
              case 4:
                  self::constructWithID($arguments[0], $arguments[1], $arguments[2], $arguments[3]);
                  break;
            }

    }

    function constructWithoutID($username, $comment, $date)
    {
      $this->username = $username;
      $this->comment = $comment;
      $this->date = $date;
    }
    function constructWithID($id, $username, $comment, $date)
    {
      $this->id = $id;
      $this->username = $username;
      $this->comment = $comment;
      $this->date = $date;
    }


        public function getUsername() {
        return $this->username;
    }
        public function getComment() {
        return $this->comment;
    }
        public function getDate() {
            return $this->date;

    }
}
