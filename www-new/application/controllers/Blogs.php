<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Blogs extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->Model('Auth_model');
    $this->load->Model('Blog_model');
    $this->load->Model('Contact_model');
		$this->load->helper('security');
        if(isset($_POST)) {
            foreach($_POST as $key => $value) {
                if(isset($_POST[$key])) {
                    $_POST[$key] = $this->security->xss_clean($value);
                }
            }
        }
        if(isset($_GET)) {
            foreach($_GET as $key => $value) {
                if(isset($_GET[$key])) {
                    $_GET[$key] = $this->security->xss_clean($value);
                }
            }
        }
  }

  public function index() 
    {
        $data['meta_title'] = 'Step-By-Step Visas Canadian Immigration Consultant Based in Canada| Canadian Immigration Company UAE | Free Assessment| Australia| Consultant';
        $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canadian Immigration Consultant Based in Canada| Canadian Immigration Company UAE | Free Assessment| Australia| Consultant| Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';
        $data['contact_us'] = $this->Contact_model->contact_us();
        // init params
        $params = array();
        $limit_per_page = 6;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->Blog_model->get_total();
 
        if ($total_records > 0) 
        {
            // get current page records
            $params["results"] = $this->Blog_model->get_current_page_records($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'Blogs/index';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            $this->pagination->initialize($config);
             
            // build paging links
            $params["links"] = $this->pagination->create_links();
        }
         
        $this->load->view('web/partials/header', $data);
        $this->load->view('web/Blog/index', $params);
        $this->load->view('web/partials/footer', $data);
    }

  public function blog(){
    $data['meta_title'] = 'Step-By-Step Visas Canadian Immigration Consultant Based in Canada| Canadian Immigration Company UAE | Free Assessment| Australia| Consultant';
    $data['meta_description'] = 'Step-by-Step Visas is an immigration service company in Canada. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
    $data['meta_keywords'] = 'Step-By-Step Visas Canadian Immigration Consultant Based in Canada| Canadian Immigration Company UAE | Free Assessment| Australia| Consultant| Step-By-Step Visas Canada Immigration Services in UAE | Free Assessment| Australia| Consultant | Canadian Immigration Company UAE ';
    $id = $this->input->get('id');
    $data['contact_us'] = $this->Contact_model->contact_us();
    $data['about_detail'] = $this->Blog_model->get_blog_detail($id);
    $data['comments'] = $this->Blog_model->get_blog_comments($id);
    $this->load->view('web/partials/header', $data);
    $this->load->view('web/Blog/blog', $data);
    $this->load->view('web/partials/footer', $data);
  }
  
  public function comments(){
    if($this->input->post('email') == ''){
      redirect(base_url().'Home', 'refresh');
    }
    $id = $this->input->post('id');
    $email = $this->input->post('email');
    $comment = $this->input->post('comment');
    $data_ary = array(
          'id' => '',
          'email' => $email,
          'text' => $comment,
          'bid' => $id,
          'date' => date('l jS \of F Y')
          );
    if (strpos($comment, 'http') !== false) {
        redirect(base_url().'Blogs/blog?id='.$id, 'refresh');
    }
    $this->Blog_model->comment($data_ary);
    redirect(base_url().'Blogs/blog?id='.$id, 'refresh');
  }

  public function display_blogs(){
    $this->Auth_model->isLoggedIn();
    $data['title'] = 'Blogs';
    $data['about_us'] = $this->Blog_model->blogs();
    $this->load->view('admin/partials/header');
    $this->load->view('admin/blogs/blogs', $data);
    $this->load->view('admin/partials/footer');
  }
  
  public function display_comments(){
    $this->Auth_model->isLoggedIn();
    $data['title'] = 'Comments';
    $data['about_us'] = $this->Blog_model->all_comments();
    $this->load->view('admin/partials/header');
    $this->load->view('admin/blogs/comments', $data);
    $this->load->view('admin/partials/footer');
  }

  public function add_blog(){
    $this->Auth_model->isLoggedIn();
    $this->load->view('admin/partials/header');
    $this->load->view('admin/blogs/add_blog');
    $this->load->view('admin/partials/footer');
  }

  public function update_blog(){
    $this->Auth_model->isLoggedIn();
    $id = $this->input->get('id');
    $data['about_detail'] = $this->Blog_model->get_blog_detail($id);
    $this->load->view('admin/partials/header');
    $this->load->view('admin/blogs/update_blog',$data);
    $this->load->view('admin/partials/footer');
  }
  
  public function delete(){
    $this->Auth_model->isLoggedIn();
    $id = $this->input->get('id');
    $data['about_detail'] = $this->Blog_model->delete($id);
    redirect(base_url().'Blogs/display_blogs', 'refresh');
  }
  
  public function delete_comments(){
    $this->Auth_model->isLoggedIn();
    $id = $this->input->get('id');
    $data['about_detail'] = $this->Blog_model->delete_comments($id);
    redirect(base_url().'Blogs/display_comments', 'refresh');
  }

  public function add(){
      $id = '';
      $text = $this->input->post('text');
      $title = $this->input->post('title');
      $config = array(

         'upload_path'   => './assets/web/img/blogs/',
         'allowed_types' => '*',
		'max_size'      => '50000',
		'encrypt_name'  => true,
		'remove_space'  => false

          );
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('pic'))
      {
          $data_ary = array(
          'id' => $id,
          'text' => $text,
          'title' => $title,
          'date' => date('l jS \of F Y')
          );
         $result = $this->Blog_model->add_blog($data_ary);
         if($result == "1"){
          $this->session->set_flashdata('success_msg', 'Blog Add Successfully');
         }else{
            $this->session->set_flashdata('failure_msg', 'Failed to add!');
         }
          redirect(base_url().'Blogs/display_blogs', 'refresh');
      } else {
          $upload_data = $this->upload->data();
          $data_ary = array(
          'id' => $id,
          'text' => $text,
          'title' => $title,
          'date' => date('l jS \of F Y'),
          'pic' => $upload_data['file_name'],
          );
          $result = $this->Blog_model->add_blog($data_ary);
          if($result == "1"){
           $this->session->set_flashdata('success_msg', 'Blog Add Successfully');
          }else{
            $this->session->set_flashdata('failure_msg', 'Failed to add!');
          }
          redirect(base_url().'Blogs/display_blogs', 'refresh');
      }
  }

    public function update(){
        $id = $this->input->post('id');
        $text = $this->input->post('text');
        $title = $this->input->post('title');
        $config = array(

           'upload_path'   => './assets/web/img/blogs/',
         'allowed_types' => '*',
		'max_size'      => '50000',
		'encrypt_name'  => true,
		'remove_space'  => false

            );
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('pic'))
        {
            $data_ary = array(
            'id' => $id,
            'text' => $text,
            'title' => $title
            );
           $result = $this->Blog_model->update_blog($data_ary);
           if($result == "1"){
            $this->session->set_flashdata('success_msg', 'Updated Successfully');
           }else{
              $this->session->set_flashdata('failure_msg', 'Failed to Update!');
           }
            redirect(base_url().'Blogs/display_blogs', 'refresh');
        } else {
            $upload_data = $this->upload->data();
            $data_ary = array(
            'id' => $id,
            'text' => $text,
            'title' => $title,
            'pic' => $upload_data['file_name'],
            );
            $result = $this->Blog_model->update_blog($data_ary);
            if($result == "1"){
             $this->session->set_flashdata('success_msg', 'Updated Users Successfully');
            }else{
              $this->session->set_flashdata('failure_msg', 'Failed to Update!');
            }
            redirect(base_url().'Blogs/display_blogs', 'refresh');
        }
    }
}
