<?php

abstract class DrivingAbility 
{
    protected function driveForward($move) {
 
        echo $move;
    }

    protected function driveBackwards ($move) {

        echo $move;
    }
}

?>
<?php 
interface Auto {
    const nitrousOxide = "nitrous oxide\n";
    const forward = "The Car moves forward\n";
    const backwards = "The Car moves backwards\n";
    public function moveForwards ();
    public function moveBackwards ();
}
?>


<?php

class Car extends DrivingAbility implements Auto
{
    public $color = "Car color is blue\n\n";

    public function moveForwards () {
        $this->driveForward(Auto::forward);
        echo Auto::nitrousOxide;
    }

    public function moveBackwards () {
        $this->driveBackwards(Auto::backwards);
        echo Auto::nitrousOxide;
    }

}

?>


<?php
interface Bulldozers {
    const bucketControl = "bucket control\n";
    const forward = "The Digger moves forward\n";
    const backwards = "The Digger moves backwards\n";
    public function moveForwards ();
    public function moveBackwards ();
}
?>


<?php

class Digger extends DrivingAbility implements Bulldozers
{
    public $weight = "Digger weight 10T\n";
    public function moveForwards () {
        $this->driveForward(Bulldozers::forward);
        echo Digger::bucketControl;
    }

    public function moveBackwards () {
        $this->driveBackwards(Bulldozers::backwards);
        echo Digger::bucketControl;
    }
}
?>


<?php
function driveAutoForward(Car $car) {
    $car->moveForwards();
    echo $car->color;
    
}

driveAutoForward(new Car());

function driveDiggerBackwards(Digger $digger) {
    $digger->moveBackwards();
    echo $digger->weight;
}

driveDiggerBackwards(new Digger());