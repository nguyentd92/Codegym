<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class CalculatorController extends Controller
{
    const ADD = 'Addition';
    const SUB = 'Subtraction';
    const MUL = 'Multiplication';
    const DIV = 'Division';
    public function index() {
        $result = ' ';
        $firstOperand = null;
        $secondOperand = null;
        return view('Calculator', compact(['result','firstOperand','secondOperand']));
    }
    public function calc(Request $request) {

        $firstOperand = $request->firstOperand;
        $secondOperand = $request->secondOperand;
        $operator = $request->operator;
        $result = 'waiting';

        switch ($operator) {
            case self::ADD:
                $result = $firstOperand + $secondOperand;
                break;
            case self::SUB:
                $result = $firstOperand - $secondOperand;
                break;
            case self::MUL:
                $result = $firstOperand * $secondOperand;
                break;
            case self::DIV:
                try {
                    if ($secondOperand == 0) {
                        throw new Exception('Cannot division by zero');
                    }
                    $result = $firstOperand / $secondOperand;
                    break;
                }
                catch (Exception $e) {
                    $result = $e->getMessage();
                }
            default: 
        };

        return view('calculator', compact(['result','firstOperand','secondOperand']));

    }
}