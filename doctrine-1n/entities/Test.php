<?php
// entities/Test.php
class Test {
  protected $id;
  protected $name;

  public function getName() {
        return $this->name;
  }

  public function setName($name) {
        $this->name = $name;
  }

  public function getId() {
        return $this->id;
  }
}
?>