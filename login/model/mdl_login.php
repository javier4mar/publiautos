<?php

class mdl_login {

    public function __construct(&$db) {
        $this->db = $db;
    }

    function loginUser($username, $password, $ip) {

        try {
            $sql = "CALL `pr_login_user`(
                             :vUsername , 
                             :vPassword , 
                             :vIp , 
                             @vStatus , 
                             @vCode , 
                             @vMsg , 
                             @vIdUser , 
                             @vFirstName , 
                             @vLastName , 
                             @vAvatarImg , 
                             @vEmail , 
                             @vGender , 
                             @vOrigin ,
                             @vNewsletter ,
                             @vStatusUser ,
                             @vLastIP ,
                             @vIdRol);";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("vUsername", $username);
            $stmt->bindParam("vPassword", $password);
            $stmt->bindParam("vIp", $ip);

            $stmt->execute();
            $stmt->closeCursor();

            $result = $this->db->query("SELECT @vStatus as vStatus  , 
                             @vCode as vCode, 
                             @vMsg  as vMsg, 
                             @vIdUser  as vIdUser, 
                             @vFirstName as vFirstName, 
                             @vLastName as vLastName, 
                             @vAvatarImg as vAvatarImg, 
                             @vEmail  as vEmail, 
                             @vGender as vGender, 
                             @vOrigin  as vOrigin,
                             @vNewsletter as vNewsletter,
                             @vStatusUser as vStatusUser,
                             @vLastIP as vLastIP,
                             @vIdRol as vIdRol;")->fetch();

            return $result;
        } catch (Exception $ex) {
            return null;
        }
    }

}
