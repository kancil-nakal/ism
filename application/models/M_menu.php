<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
    public function getSubmenu()
    {
        $query = "SELECT `sub_menus`.*, `menus`.`menu`
                FROM `sub_menus` JOIN `menus`
                ON `sub_menus`.`menu_id` = `menus`.`menu_id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getRoleUser()
    {
        $query = "SELECT `admin_users`.*, `roles`.`role`
                FROM `admin_users` JOIN `roles`
                ON `admin_users`.`role_id` = `roles`.`role_id`
        ";

        return $this->db->query($query)->result_array();
    }
}
