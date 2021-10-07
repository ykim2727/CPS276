<?php

Class Calculator{
    private $op;
    private $num1;
    private $num2;
    private $result;

    public function calc($op,$num1,$num2){
        return $this->check($op,$num1,$num2);
    }

    public function check($op,$num1,$num2){
        switch(true){
            case gettype($op)!=="string":return "Enter a String and 2 Ints"
            case gettype($num1)!=="integer":return "Enter a String and 2 Ints"
            case gettype($num2)!=="integer":return "Enter a String and 2 Ints"
            default:return $this->calc2($op,$num1,$num2);
        }
    }

    public function calc2($op,$num1,$num2){
        switch($op){
            case "+":
            return $this->result=$num1+$num2;

            case "-":
            return $this->result=$num1-$num2;

            case "*":
            return $this->answer=$num1*$num2;

            case "/":$this->answer=$num1/$num2;
            if ($num2==0){
                return "Can't Divide by Zero!"
            }
            else{
                return $this->answer=$num1/$num2;
            }
        }
    }
 
}

$?>