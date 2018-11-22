<?php

require "modelo/usuarioModelo.php";

define('AUTENTICADOR', true);

function authLogin($login, $passwd) {

    $usuario = pegarUsuarioPorEmailSenha($login, $passwd);

    if ($login == "admin" && $passwd == "123") { 
        $_SESSION["auth"] = array("user" => "admin", "role" => "admin");
        return true;


    }
    if (!empty($usuario)) {
        $_SESSION["auth"] = array("user" => $usuario, "role" => "user");
          $_SESSION["user"] = array("user" => $usuario, "role" => "user");
        return true;
    }
    return false;
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
		unset($_SESSION["carrinho"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}

function pegarUsuarioLogado() {
      if (authIsLoggedIn()) {
        return $_SESSION["auth"];
    }
}