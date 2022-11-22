<?

    class Usuario extends Conectar{
        public function get_login($usu_correo, $usu_pass){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="select * from tm_usuario where usu_correo=? and usu_pass=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_correo);
            $sql->bindValue(2, $usu_pass);
            $sql->execute();
            return $resultado=$sql->fetchAll();

        }
    }

?>