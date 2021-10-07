<?php

Class Calculator{
    
    private $result;

    public function calc($op=null,$num1=null,$num2=null){
        return $this->check($op,$num1,$num2);
    }

    public function check($op,$num1,$num2){
        if(gettype($op)!=="string" || gettype($num1)!=="integer" || gettype($num2)!=="integer"){
            return "You must enter a string and two numbers<br><br>";   
        }else return $this->calc2($op,$num1,$num2)."<br>";
    }

    public function calc2($op,$num1,$num2){
        switch($op){
            case "+":$this->result=$num1+$num2;
            return "The sum of the numbers is ".$this->result."<br>";

            case "-":$this->result=$num1-$num2;
            return "The difference of the numbers is ".$this->result."<br>";

            case "*":$this->result=$num1*$num2;
            return "The product of the numbers is ".$this->result."<br>";

            case "/":
            if ($num2==0){
                return "Cannot Divide by Zero<br>";
            }
            else{
                return "The division of the numbers is ".$this->result=$num1/$num2."<br>";
            }
        }
    }
 
}

?>