<?php
/*
*
* La clase ChildClass sobreescribe la declarada en BaseClass. Corregir para evitar sobreeescrituras de clases heredadas. 
*
*/
class BaseClass {
   public function test() {
       echo "llamada a BaseClass::test()\n";
   }
   
   final public function moreTesting() {
       echo "llamada FINAL a BaseClass::moreTesting()\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "llamada SOBRE ESCRITA a ChildClass::moreTesting()\n";
   }
}

$a = new ChildClass();
$a->moreTesting();

exit();