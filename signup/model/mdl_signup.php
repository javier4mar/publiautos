<?php

class mdl_signup {

    public function __construct(&$db) {
        $this->db = $db;
    }

    function autenticar($user_name, $password) {

        return 0;
    }

    function addUser($name, $lastname, $email, $password, $origin,$rol, $ip) {

        try {
            $sql = "CALL `pr_create_user`( :vName , :vLastName , :vEmail ,:vPassword, :vOrigin,:vRol ,:vIp, @p6, @p7, @p8);";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("vName", $name);
            $stmt->bindParam("vLastName", $lastname);
            $stmt->bindParam("vEmail", $email);
            $stmt->bindParam("vPassword", $password);
            $stmt->bindParam("vOrigin", $origin);
            $stmt->bindParam("vRol", $rol);
            $stmt->bindParam("vIp", $ip);

            $stmt->execute();
            $stmt->closeCursor();

            $result = $this->db->query("SELECT @p6 as vStatus ,@p7 as vCode , @p8 as vMsg;")->fetch();

            return $result;
        } catch (Exception $ex) {
            return null;
        }
    }
}
