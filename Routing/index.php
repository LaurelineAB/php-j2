<?php
    
    $routes = [
        [
            "href" => "home.phtml",
            "name" => "Home"
        ],
        [
            "href" => "about.phtml",
            "name" => "About"
        ],
        [
            "href" => "contact.phtml",
            "name" => "Contact"
        ]
    ];
    
    if(isset($_GET["route"]))
    {
        if ($_GET["route"] === "about")
        {
            require "about.phtml";
        }
        else if ($_GET["route"] === "contact")
        {
            require "contact.phtml";
        }
        else if (empty($_GET["route"]))
        {
            require "404.phtml";
        }
    }
    else
    {
        require "home.phtml";
    }

?>