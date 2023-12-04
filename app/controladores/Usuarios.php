<?php
class Usuarios extends Controlador
{

    public function __construct()
    {
        $this->usuariosModelo = $this->modelo('Usuario');
        $this->rolesModelo = $this->modelo('Rol');
    }

    public function index()
    {
        //Obtener los usuarios
        $usuarios = $this->usuariosModelo->obtenerUsuarios();
        
        $datos = [
            'usuarios' => $usuarios,
        ];

        $this->vista('paginas/usuarios/inicio', $datos);
    }

    //AGREGAR
    public function agregar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdIdentificacion' => trim($_POST['pkIdIdentificacion']),
                'tipoDocu' => trim($_POST['tipoDocu']),
                'nombres' => trim($_POST['nombres']),
                'apellidos' => trim($_POST['apellidos']),
                'direccion' => trim($_POST['direccion']),
                'telefono' => trim($_POST['telefono']),
                'email' => trim($_POST['email']),
                'genero' => trim($_POST['genero']),
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena']),
                'fkIdRol' => trim($_POST['idRol'])
            ];

            if ($this->usuariosModelo->agregarUsuario($datos)) {
                redireccionar('usuarios');
            } else {
                die('Algo salió mal');
            }
        } else {
            //Obtener los roles
            $roles = $this->rolesModelo->obtenerRoles();
            $datos = [
                'pkIdIdentificacion' => '',
                'tipoDocu' => '',
                'nombres' => '',
                'apellidos' => '',
                'direccion' => '',
                'telefono' => '',
                'email' => '',
                'genero' => '',
                'usuario' => '',
                'contrasena' => '',
                'fkIdRol' => '',
                'roles' => $roles
            ];

            $this->vista('paginas/usuarios/agregar', $datos);
        }
    }

    //EDITAR
    public function editar($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdIdentificacion' => $id,
                'pkIdIdentificacion' => trim($_POST['pkIdIdentificacion']),
                'tipoDocu' => trim($_POST['tipoDocu']),
                'nombres' => trim($_POST['nombres']),
                'apellidos' => trim($_POST['apellidos']),
                'direccion' => trim($_POST['direccion']),
                'telefono' => trim($_POST['telefono']),
                'email' => trim($_POST['email']),
                'genero' => trim($_POST['genero']),
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena']),
                'fkIdRol' => trim($_POST['idRol'])
            ];

            if ($this->usuariosModelo->actualizarUsuario($datos)) {
                redireccionar('usuarios');
            } else {
                die('Algo salió mal');
            }
        } else {

            //Obtener información de usuario desde el modelo
            $usuarios = $this->usuariosModelo->obtenerUsuarioId($id);

            //Obtener las roles
            $rol = $this->rolesModelo->obtenerRolId($usuarios->fkIdRol);
            $rolesExp = $this->rolesModelo->obtenerRolesExcepto($usuarios->fkIdRol);

            $datos = [
                'pkIdIdentificacion' => $usuarios->pkIdIdentificacion,
                'tipoDocu' => $usuarios->tipoDocu,
                'nombres' => $usuarios->nombres,
                'apellidos' => $usuarios->apellidos,
                'direccion' => $usuarios->direccion,
                'telefono' => $usuarios->telefono,
                'email' => $usuarios->email,
                'genero' => $usuarios->genero,
                'usuario' => $usuarios->usuario,
                'contrasena' => $usuarios->contrasena,
                'fkIdRol' => $usuarios->fkIdRol,

                'roles' => $rolesExp,
                'rol' => $rol,
            ];

            $this->vista('paginas/usuarios/editar', $datos);
        }
    }



    //BORRAR
    public function borrar($id)
    {

        //Obtener información de usuario desde el modelo
        $usuarios = $this->usuariosModelo->obtenerUsuarioId($id);
        //Obtener las roles
        $rol = $this->rolesModelo->obtenerRolId($usuarios->fkIdRol);


        $datos = [
                'pkIdIdentificacion' => $usuarios->pkIdIdentificacion,
                'tipoDocu' => $usuarios->tipoDocu,
                'nombres' => $usuarios->nombres,
                'apellidos' => $usuarios->apellidos,
                'direccion' => $usuarios->direccion,
                'telefono' => $usuarios->telefono,
                'email' => $usuarios->email,
                'genero' => $usuarios->genero,
                'usuario' => $usuarios->usuario,
                'contrasena' => $usuarios->contrasena,
                'fkIdRol' => $usuarios->fkIdRol,

                'nomRol' => $rol->nombre,
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'pkIdIdentificacion' => $id
            ];

            if ($this->usuariosModelo->borrarUsuario($datos)) {
                redireccionar('usuarios');
            } else {
                die('Algo salió mal');
            }
        }

        $this->vista('paginas/usuarios/borrar', $datos);
    }
}
