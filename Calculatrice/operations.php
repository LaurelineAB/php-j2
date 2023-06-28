<?php

    function add (int $nb1, int $nb2) : int
    {
        return $nb1 + $nb2;
    }
    function substract (int $nb1, int $nb2) : int
    {
        return $nb1 - $nb2;
    }
    function multiply (int $nb1, int $nb2) : int
    {
        return $nb1 * $nb2;
    }
    function divide (int $nb1, int $nb2)
    {
        if ($nb2 === 0)
        {
            return "On ne peut pas diviser par zéro.";
        }
        else
        {
            return $nb1 / $nb2;
        }
    }
    function modulo (int $nb1, int $nb2)
    {
        if ($nb2 === 0)
        {
            return "On ne peut pas diviser par zéro.";
        }
        else
        {
            return $nb1 % $nb2;
        }
    }
    function puissance (int $nb1, int $nb2) : int
    {
        return $nb1 ** $nb2;
    }

?>