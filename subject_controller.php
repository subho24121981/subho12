<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class subject extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('subjectModel');         
   }
   public function index()
   {
       $products=new ProductsModel;
       $data['data']=$products->get_subject();
       $this->load->view('includes/header');       
       $this->load->view('products/list',$data);
       $this->load->view('includes/footer');
   }
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('products/create');
      $this->load->view('includes/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $subject=new subjectModel;
       $subject->insert_subject();
       redirect(base_url('subject'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $subject = $this->db->get_where('subject', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('products/edit',array('subject'=>$subject));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $subject=new subjectModel;
       $subject->update_subject($id);
       redirect(base_url('subject'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('subject');
       redirect(base_url('subject'));
   }
}
?>
