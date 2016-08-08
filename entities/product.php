<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.08.2016
 * Time: 0:11
 */
class Product {
    private $id;
    private $name;

    public function __construct($anId, $aName) {
        $this->id = $anId;
        $this->name = $aName;
    }

    public function id(){
        return $this->id;
    }

    public function name(){
        return $this->name;
    }
}
//class Person
//4 {
//    5 private $identificationNumber;
//6 private $firstName;
//7 private $lastName;
//8
//9 public function __construct(
//10 $anIdentificationNumber,
//11 $aFirstName,
//12 $aLastName
//13 ) {
//        14 $this->identificationNumber = $anIdentificationNumber;
//15 $this->firstName = $aFirstName;
//16 $this->lastName = $aLastName;
//17 }
//83
//Entities 84
//18
//19 public function identificationNumber()
//20 {
//        21 return $this->identificationNumber;
//22 }
//23
//24 public function firstName()
//25 {
//        26 return $this->firstName;
//27 }
//28
//29 public function lastName()
//30 {
//        31 return $this->lastName;
//32 }
//33 }