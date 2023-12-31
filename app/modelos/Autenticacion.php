<?php

class Autenticacion {
    private $db;

    public function __construct() {
        $this->db = new Base;
    }

    public function obtenerUsuarioPorCredenciales($usuario, $contrasena) {
        $this->db->query('SELECT pkIdIdentificacion, usuario, contrasena, fkIdRol, nombre as rolUser FROM usuarios INNER JOIN rol ON fkIdRol = pkIdRol WHERE usuario = :usuario AND contrasena = :contrasena');
        $this->db->bind(':usuario', $usuario);
        $this->db->bind(':contrasena', $contrasena);
        return $this->db->registro();
    }
}
?>
