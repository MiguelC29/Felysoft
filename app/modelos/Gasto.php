<?php

    class Gasto {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

//OBTENER GASTOS
        public function obtenerGastos() {
            
            //$this->db->query('SELECT * FROM gastos LEFT JOIN compras ON fkIdCompra = pkIdCompra INNER JOIN pago ON fkIdPago = pkIdPago ORDER BY pkIdGasto');
            $this->db->query('call mostrar_gastos');


            $resultados = $this->db->registros();

            return $resultados;
        }


//AGREGAR GASTOS
        public function agregarGasto($datos) {
            //$this->db->query('INSERT INTO gastos (fecha, monto, descripcion, fkIdCompra, fkIdPago) VALUES (:fecha, :monto, :descripcion, :fkIdCompra, :fkIdPago)');
            $this->db->query('CALL agregar_gastos(:fecha, :monto, :descripcion, :fkIdCompra, :fkIdPago)');

            //Vincular valores
            $this->db->bind(':fecha', $datos['fecha']);
            $this->db->bind(':monto', $datos['monto']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':fkIdCompra', $datos['fkIdCompra']);
            $this->db->bind(':fkIdPago', $datos['fkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

//OBTENER UN GASTO ESPECÍFICO
public function obtenerGastoId($id) {
    //$this->db->query('SELECT * FROM gastos WHERE pkIdGasto = :id');
    $this->db->query('CALL mostrar_gasto_especifico (:id)');
    $this->db->bind(':id', $id);

    $result = $this->db->registro();

    return $result;
}

//ACTUALIZAR GASTOS
        public function actualizarGasto($datos) {
            //$this->db->query('UPDATE gastos SET fecha = :fecha, monto = :monto, descripcion = :descripcion, fkIdCompra = :fkIdCompra, fkIdPago = :fkIdPago WHERE pkIdGasto = :id');
            $this->db->query('CALL actualizar_gastos (:id, :fecha, :monto, :descripcion, :total, :metodoPago)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdGasto']);
            $this->db->bind(':fecha', $datos['fecha']);
            $this->db->bind(':monto', $datos['monto']);
            $this->db->bind(':descripcion', $datos['descripcion']);
            $this->db->bind(':total', $datos['fkIdCompra']);
            $this->db->bind(':metodoPago', $datos['fkIdPago']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }            
        }


//ELIMINAR GASTOS
        public function borrarGasto($datos) {
            //$this->db->query('DELETE FROM gastos WHERE pkIdGasto = :id');
            $this->db->query('CALL borrar_gastos (:id)');

            //Vincular los valores
            $this->db->bind(':id', $datos['pkIdGasto']);

            //Ejecutar
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>