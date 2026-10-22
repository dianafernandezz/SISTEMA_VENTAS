<?php
class Producto extends Conectar {
    public function get_producto() {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM tm_producto WHERE est = 1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
?>