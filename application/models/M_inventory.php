<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_inventory extends CI_Model
{
    public function getProductAsset()
    {
        $query = "SELECT `products`.*, `assets`.`asset`, `brands`.`brand` AS AssetBrand
                FROM `products`
                JOIN `assets` ON `products`.`asset_id` = `assets`.`asset_id`
                JOIN `brands` ON `products`.`brand_id` = `brands`.`brand_id`
        ";
        // $query = "SELECT * FROM `products` `p`,`assets` `a`,`brands` b WHERE `p`.`asset_id` = `a`.`asset_id` AND `p`.`brand_id` = `b`.`brand_id`
        // ";

        return $this->db->query($query)->result_array();
    }

    public function getLogProduct()
    {
        $query = $query = "SELECT * FROM `products` `p`, `users` `u`, `assets` `a`, `brands` `b`, `log_product` `l`
                        where `p`.`asset_id`=`a`.`asset_id`
                        and `p`.`brand_id`=`b`.`brand_id`
                        and `l`.`user_id`=`u`.`user_id`
                        and `p`.`product_id`=`l`.`product_id`
                ";


        return $this->db->query($query)->result_array();
    }
}
