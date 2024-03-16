<?php

  if(isset($_GET[("page")])) {
    switch($_GET[("page")]) {
      case "home": 
        require_once("views/home.php");
        break;
      case "houre":
        require_once("views/houre.php");
        break;
      case "menu":
        require_once("views/menu.php");
        break;
      case "contact":
        require_once("views/reservation.php");
        break;
        default;
        unset($_GET["page"]);
        return header('location:home.php');
        break;
    }
  } else {
    require_once("views/home.php");
  }


?>