<?php

class View {
  public function __construct($person) {
    $this->name   = $person->name;
    $this->gender = $person->gender;
    $this->upp_s  = $person->upp_s;
  }
  public function __toString() {
    $return_string = "$this->name [$this->gender] $this->upp_s";
    return $return_string;
  }
}
?>

