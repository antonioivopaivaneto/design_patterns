<?

namespace src;

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