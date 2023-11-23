<?php


require_once __DIR__ . "/vendor/autoload.php";


interface IteratorInterface{

    public function hasNext();
    public function next();
    public function current();

}

class ConcreteIterator implements IteratorInterface{
    private $collection;
    private $position = 0;

    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    public function hasNext()
    {
        return $this->position <count ($this->collection);
    }

    public function next(){
        $item = $this->collection[$this->position];
        $this->position++;
        return $item;
    }

    public function current(){

        return $this->collection[$this->position];
    }



}

$myCollection = ['banana','apple','Orange','Grapes'];
$iterator = new ConcreteIterator($myCollection);

while($iterator->hasNext()){
    echo $iterator->next() ."<br>";
}
