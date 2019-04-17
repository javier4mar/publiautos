<?php

class mdl_complete {

    public function __construct(&$db) {
        $this->db = $db;
    }

    function autenticar($user_name, $password) {

        return 0;
    }

    function getListUserType() {
        try {
            $sql = "SELECT 
                        cat_type_seller.idSellerType,
                        cat_type_seller.`name`,
                        cat_type_seller.description,
                        cat_type_seller.img 
                    FROM `cat_type_seller` WHERE status='1'";

            $stmt = $this->db->prepare($sql);

            $stmt->execute();

            $data = $stmt->fetchAll();

            return $data;
        } catch (Exception $ex) {
            return null;
        }
    }

    function getDocumentTypes() {
        try {
            $sql = "SELECT
                        cat_document_types.idDocumentType,
                        cat_document_types.`name`,
                        cat_document_types.regex,
                        cat_document_types.`status`
                    FROM
                        cat_document_types
                     WHERE status='1'";

            $stmt = $this->db->prepare($sql);

            $stmt->execute();

            $data = $stmt->fetchAll();

            return $data;
        } catch (Exception $ex) {
            return null;
        }
    }

    function addProfileUser($idSellerType, $idDocumentType, $documentNumber, $name, $address, $lon, $lat, $facebookPage, $instagramPage, $twitterPage, $page, $logoUrl) {
        try {
            $sql = "INSERT INTO `publiautosdb`.`adm_profiles`(`idProfile`, `idSellerType`, `idDocumentType`, `documentNumber`, `name`, `address`, `lon`, `lat`, `facebookPage`, `instagramPage`, `twitterPage`, `page`, `logoUrl`, `numberProfileViews`, `status`, `created_at`, `modified_at`)"
                    . " VALUES (NULL, :idSellerType, :idDocumentType, :documentNumber, :name, :address, :lon, :lat, :facebookPage, :instagramPage, :twitterPage, :page, :logoUrl, 0, 1, now(), now());";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("idSellerType", $idSellerType);
            $stmt->bindParam("idDocumentType", $idDocumentType);
            $stmt->bindParam("documentNumber", $documentNumber);
            $stmt->bindParam("name", $name);
            $stmt->bindParam("address", $address);
            $stmt->bindParam("lon", $lon);
            $stmt->bindParam("lat", $lat);
            $stmt->bindParam("facebookPage", $facebookPage);
            $stmt->bindParam("instagramPage", $instagramPage);
            $stmt->bindParam("twitterPage", $twitterPage);
            $stmt->bindParam("page", $page);
            $stmt->bindParam("logoUrl", $logoUrl);
            
            $stmt->execute();
            
            return $this->db->lastInsertId();
            
            
        } catch (Exception $ex) {
            return null;
        }
    }

}
