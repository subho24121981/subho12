<?php
class subjectModel extends CI_Model{
    
    public function get_subject(){
        if(!empty($this->input->get("search"))){
          $this->db->like('subject_title', $this->input->get("search"));
          $this->db->or_like('subject_description', $this->input->get("search")); 
        }
        $query = $this->db->get("subject");
        return $query->result();
    }
    public function insert_product()
    {    
        $data = array(
            'subject_title' => $this->input->post('subject_title'),
            'subject_description' => $this->input->post('subject_description')
        );
        return $this->db->insert('subject', $data);
    }
    public function update_subject($id) 
    {
        $data=array(
            'subject_title' => $this->input->post('subject_title'),
            'subject_description'=> $this->input->post('subject_description')
        );
        if($id==0){
            return $this->db->insert('subject',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('subject',$data);
        }        
    }
}
?>
