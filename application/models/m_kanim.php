<?php
class M_kanim extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_all()
        {
                $query = $this->db->get('kanim');
                return $query->result();
        }
        public function get_pejabat()
        {
                $query = $this->db->query("SELECT
                        kanim.nama_kanim,
                        pejabat.id,
                        pejabat.nama,
                        pejabat.nip,
                        pejabat.dik,
                        pejabat.pangkat,
                        pejabat.id_kanim
                        FROM
                        kanim ,
                        pejabat
                        WHERE
                        kanim.id = pejabat.id_kanim");
                return $query->result();
        }
        public function get_by_name($nama_kanim)
        {
                $query = $this->db->get_where('kanim', array('nama_kanim'=>$nama_kanim));
                return $query->result();
        }

}
?>