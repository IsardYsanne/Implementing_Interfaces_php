<?php

interface InterfaceElement{
    public function draw();//нарисовать
    public function color();//расскрасить
}
class Circle implements InterfaceElement{
    public function draw(){
        echo "нарисовать круг <br>";
        echo "<div style='
                width:100px; 
                height: 100px;
                border-radius:50%;
                 background-color: #be2121;'></div>";
    }
    public function color(){
        echo "покрасить в красный <br>";
        echo "<br>";
    }
}
class Square implements InterfaceElement{
    public function draw(){
        echo "нарисовать квадрат <br>";
        echo "<div style='
                width:100px; 
                height: 100px;
                 background-color: forestgreen;'></div>";
    }
    public function color(){
        echo "покрасить в зеленый <br>";
        echo "<br>";
    }
}
class Line implements InterfaceElement{
    public function draw(){
        echo "нарисовать линию";
    }
    public function color(){
        echo " синим цветом <br>";
    }
}
class Painter{
    public function addElement(InterfaceElement $element){
        return $element->draw() . "<br>" . $element->color();
    }
}
$element = new Square();
$artist = new Painter();
$artist->addElement($element); //художник рисует квадрат и красит в зеленый

$element2 = new Circle();
$galya = new Painter();
$galya->addElement($element2); // Галя рисует круг и красит в красный