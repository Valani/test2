<?php
/**
 * @copyright    OCTemplates
 * @support      https://octemplates.net/
 * @license      LICENSE.txt
 */

class ModelOCTemplatesModuleOctPopupFoundCheaper extends Model {
    public function getCall($request_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "oct_popup_found_cheaper` WHERE request_id = '" . (int)$request_id . "'");
        
        return $query->row;
    }
    
    public function deleteCall($request_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "oct_popup_found_cheaper` WHERE request_id = '" . (int)$request_id . "'");
    }
    
    public function deleteAllCallArray() {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "oct_popup_found_cheaper`");
    }
    
    public function getCallArray($data = array()) {
        $sql = "SELECT * FROM `" . DB_PREFIX . "oct_popup_found_cheaper` ";
        
        $sql .= " GROUP BY request_id";
        
        $sort_data = array(
            'date_added'
        );
        
        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY date_added";
        }
        
        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
        
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }
            
            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }
            
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }
        
        $query = $this->db->query($sql);
        
        return $query->rows;
    }
    
    public function getTotalCallArray($data = []) {
        $sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "oct_popup_found_cheaper`";
        
        if (isset($data['filter_processed']) && !is_null($data['filter_processed'])) {
	        $sql .= " WHERE processed = '". (int)$data['filter_processed'] ."'";
        }	
        	
        $query = $this->db->query($sql);
        
        return $query->row['total'];
    }
    
    public function addProcessed($request_id, $processed_status = 0) {
        $this->db->query("UPDATE `" . DB_PREFIX . "oct_popup_found_cheaper` SET `processed` = '" . (int)$processed_status . "' WHERE request_id = '" . (int)$request_id . "'");

		return $this->db->countAffected() ? true : false;
    }
    
    public function updateNote($request_id, $note) {
        $this->db->query("UPDATE `" . DB_PREFIX . "oct_popup_found_cheaper` SET note = '" . $this->db->escape($note) . "' WHERE request_id = '" . (int)$request_id . "'");
    }
    
    public function makeDB() {
        $sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "oct_popup_found_cheaper` ( ";
        $sql .= "`request_id` int(11) NOT NULL AUTO_INCREMENT, ";
        $sql .= "`info` text COLLATE utf8_general_ci NOT NULL, ";
        $sql .= "`processed` TINYINT(1) NOT NULL DEFAULT '0', ";
        $sql .= "`note` text COLLATE utf8_general_ci NOT NULL, ";
        $sql .= "`date_added` datetime NOT NULL, ";
        $sql .= "PRIMARY KEY (`request_id`) ";
        $sql .= ") ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE utf8_general_ci AUTO_INCREMENT=1 ;";
        
        $this->db->query($sql);
    }
    
    public function deleteDB() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "oct_popup_found_cheaper`;");
    }
}