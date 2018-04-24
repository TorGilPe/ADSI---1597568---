<?php

namespace calculator;

/**
 * Class for show the calculator
 * 
 * @author Victor Andres Gil Peñuela <viangipe@gmail.com>
 * @package Calculator
 */

class CalculatorClass {
    /**
     * Number one for the operation
     * 
     * @var float
     */
    private $number1;
    
    /**
     * Number two for the operation
     * 
     * var float
     */
    private $number2;
    
    /**
     * Return the number 1
     * 
     * @return float
     */
    public function getNumber1(): float
    {
        return $this->number1;
    }

    /**
     * Return the number 2
     * 
     * @return float
     */
    public function getNumber2(): float
    {
        return $this->number2;
    }

    /**
     * Set the number 1
     * 
     * @param float $number1
     */
    public function setNumber1(float $number1) 
    {
        $this->number1 = $number1;
    }

    /**
     * Set the number 2
     * 
     * @param float $number2
     */
    public function setNumber2(float $number2) 
    {
        $this->number2 = $number2;
    }
    
    public function  sum(): float
    {
        return $this->number1 + $this->number2;
    }

    public function  rest(): float
    {
        return $this->number1 - $this->number2;
    }

    public function  multi(): float
    {
        return $this->number1 * $this->number2;
    }
    
    public function  divi(): float
    {
      if ($this->number2 != 0){
        return $this->number1 / $this->number2;
      } else {
        throw new \Exception("The division by zero does not exist.", 501);
      }
    }
    
    public function log(): float
    {
        return log($this->number1, $this->number2);
    }
    
    public function squared(): float
    {
        return $this->number1 * $this->number1;
    }
    
    public function pow(): float
    {
        return pow($this->number1, $this->number2);
    }
    
    public function sqrt(): float
    {
        return sqrt($this->number1);
    }
}