<?php

    require "calculator.phtml";
    
    if(isset($_POST["submit"]))
    {
        $op = htmlspecialchars($_POST["op"]);
        $nb1 = htmlspecialchars($_POST["nb1"]);
        $nb2 = htmlspecialchars($_POST["nb2"]);
        // var_dump($op, $nb1, $nb2);
    }
    
    require "operations.php";
    
    if (isset($op))
    {
        if ($op === "add")
        {
            $result = add($nb1, $nb2);
            echo //$result;
            "<h3>Résultat : $result</h3>";
        }
        if ($op === "sub")
        {
            $result = substract($nb1, $nb2);
            echo "<h3>Résultat : $result</h3>";;
        }
        if ($op === "mult")
        {
            $result = multiply($nb1, $nb2);
            echo "<h3>Résultat : $result</h3>";;
        }
        if ($op === "div")
        {
            $result = divide($nb1, $nb2);
            echo "<h3>Résultat : $result</h3>";;
        }
        if ($op === "mod")
        {
            $result = modulo($nb1, $nb2);
            echo "<h3>Résultat : $result</h3>";;
        }
        
    }
    
    

?>