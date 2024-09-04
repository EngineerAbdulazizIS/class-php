<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$AbdulazizAlzahrani = new Fruit();
$AbdulazizAlzahrani->set_name('Abdulaziz Alzahrani <br>');
$AbdulazizAlzahrani->set_color('#ff99cc');
echo "Name: " . $AbdulazizAlzahrani->get_name();
echo "<br>";
echo "Color: " .  $AbdulazizAlzahrani->get_color();
?>
 
</body>
</html>
