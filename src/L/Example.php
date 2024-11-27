<?php

namespace App\L;

class A {
    public function fire(){}
}

class B extends A {
    public function fire(){}
}

class C extends A {
    public function fire(){}
}

//bu prensibe göre, aşağıdaki fonksiyonun A sınıfı yerine B ve C sınıflarını da kabul etmesi gerekiyor.
//eğer hata veriyorsa Liskow Substitution ihlal edilmiştir.
function doSomething(A $obj){
    $obj->fire();
}