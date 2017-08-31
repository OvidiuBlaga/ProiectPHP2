<?php

class DB_Object {
    protected $id;
    protected $dateAdd;
    protected $dateUpd;
    
    public function setDateAdd(){
        $dat = new \DateTime('now', new \DateTimeZone('Europe/Bucharest'));
        $this->dateAdd = $dat->format('Y-m-d H:i:s');              
        
    }
    
    public function setDateUpd(){
        $dat = new \DateTime('now', new \DateTimeZone('Europe/Bucharest'));
        $this->dateUpd = $dat->format('Y-m-d H:i:s');             
        
    }       
}

class Product extends DB_Object {
    public static $count;
    private $name;
    private $description;
    private $price;
    private $quantity;
    
    public function setDateAdd(){
        $dat = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $this->dateAdd = $dat->format('Y-m-d H:i:s');              
        
    }
    
    public function __construct($x1='x', $x2='xx', $x3='0', $x4='0') {
        self::$count++;
        $this->name = $x1;
        $this->description = $x2;
        $this->price = $x3;
        $this->quantity = $x4;
    }
    
    public function setName($x) {
        $this->name = $x;
    }
    
    public function getName() {
        return $this->name;
    }    
    
    public function __toString() {
        return $this->name . ' ' .$this->description;
    }  
    public function test() {
        echo $this->getName();
    }
}

/*$p = new Product();
//$p->name = 'caciula';
//echo $p->name;
$p->setName('caciula');
//var_dump($p);
echo $p->getName();
 */
$p = new Product('caciula', 'caciula bebe', 23.4, 3);
//var_dump($p);

//echo $p;

$p->setDateAdd();
$p->setDateUpd();

//var_dump($p);
$p->test();

$p = new Product('caciula', 'caciula bebe', 23.4, 3);
$p = new Product('caciula', 'caciula bebe', 23.4, 3);
$p = new Product('caciula', 'caciula bebe', 23.4, 3);


var_dump($p::$count);