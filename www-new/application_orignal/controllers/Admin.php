<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Auth_model');
        $this->load->Model('UserAuth_model');
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


    public function backup()
    {


        $this->Auth_model->isLoggedIn();
        $this->load->dbutil();
        $prefs = array(



                'format'      => 'zip',
                'filename'    => 'my_db_backup.sql'

             );
        $backup =$this->dbutil->backup($prefs);
        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = 'pathtobkfolder/'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup);
        $this->load->helper('download');
        force_download($db_name, $backup);
    }


    public function resetPassword()
    {



        $this->Auth_model->isLoggedIn();



        $this->load->view('admin/partials/header');

        $this->load->view('admin/resetPassword');

        $this->load->view('admin/partials/footer');

    }



    public function verifyResetPassword()
    {

        $this->Auth_model->isLoggedIn();
        $cPass = $this->input->post('cPass');
        $nPass = $this->input->post('nPass');
        $rPass = $this->input->post('rPass');
        $password = sha1($cPass);
        $this->db->where('user_password', $password);
        $query = $this->db->get('auth');
        $result = $query->result();
        if($result) {

            if ($nPass == $rPass) {

                if (strlen($nPass) < 8) {

                    echo ' <div class="alert alert-warning">
              New password should have atleast 6 characters</div> ';

                } else {
                    $newPassword = sha1($nPass);
                    $data_ary = array(
                        'user_password' => $newPassword,
                        );
                    $this->db->where('user_password', $password);
                    $this->db->update('auth', $data_ary);
                    echo ' <div class="alert alert-success">
             		 Password has been changed successfully!
             		 </div> ';
                }

            } else {
                echo ' <div class="alert alert-warning">
                     New password and Repeat passoword does not match!
                     </div> ';

            }

        } else {

            echo ' <div class="alert alert-danger">
                 "In correct Current Passowrd";
                   </div> ';
        }
    }


    public function display_user()
    {
        $data['display_user'] = $this->UserAuth_model->display_user();
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Display User';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/display_user', $data);
        $this->load->view('admin/partials/footer');
    }

    public function display_program_user()
    {
        $data['display_user'] = $this->UserAuth_model->display_program_user();
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Display User';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/display_program_user', $data);
        $this->load->view('admin/partials/footer');
    }



    public function add_user()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Add User';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/add_user', $data);
        $this->load->view('admin/partials/footer');
    }

    public function add_c_user()
    {
        $this->Auth_model->isLoggedIn();
        $data['title'] = 'Add User';
        $this->load->view('admin/partials/header');
        $this->load->view('admin/add_c_user', $data);
        $this->load->view('admin/partials/footer');
    }

    public function added_user()
    {
        $this->Auth_model->isLoggedIn();

        $user_id = $this->input->post('user_id');
        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_email');
        $user_password = $this->input->post('user_password');
        $visible = 1;
        $password = sha1($user_password);

        $data_ary = array(

         'user_id' => $user_id,
         'user_name' => $user_name,
         'user_email' => $user_email,
         'user_password' => $password,
         'visible' => $visible,

         );

        $result = $this->UserAuth_model->added_user($data_ary);


        redirect(base_url().'Admin/display_user', 'refresh');

    }

    public function added_c_user()
    {
        $this->Auth_model->isLoggedIn();

        $user_id = $this->input->post('user_id');
        $user_name = $this->input->post('user_name');
        $user_email = $this->input->post('user_email');
        $type = $this->input->post('type');
        $user_password = $this->input->post('user_password');
        $visible = 1;
        $password = sha1($user_password);

        $data_ary = array(

         'user_id' => $user_id,
         'user_name' => $user_name,
         'user_email' => $user_email,
         'clients_type' => $type,
         'user_password' => $password,
         'is_active' => $visible,

         );

        $result = $this->UserAuth_model->added_c_user($data_ary);


        redirect(base_url().'Admin/display_program_user', 'refresh');

    }

    public function delete_user()
    {
        $this->Auth_model->isLoggedIn();
        $user_id =  $this->input->post('user_id');

        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
        redirect(base_url().'Admin/display_user', 'refresh');

    }

    public function updateState()
    {

        $this->Auth_model->isLoggedIn();

        $user_id=$this->input->post('user_id');
        $state=$this->input->post('state');

        $data = array(
          'visible' => $state,
          );

        $this->db->where('user_id', $user_id);
        $this->db->update('user', $data);

        redirect('Admin/display_user');

    }

    public function updateState3()
    {

        $this->Auth_model->isLoggedIn();

        $user_id=$this->input->post('user_id');
        $this->db->where('user_id', $user_id);
        $this->db->delete('crm_auth');

        redirect('Admin/display_program_user');

    }

    public function updateState2()
    {

        $this->Auth_model->isLoggedIn();

        $user_id=$this->input->post('user_id');
        $state=$this->input->post('state');

        $data = array(
          'is_active' => $state,
          );

        $this->db->where('user_id', $user_id);
        $this->db->update('crm_auth', $data);

        redirect('Admin/display_program_user');

    }

    public function change_c_password(Type $var = null)
    {
        $this->Auth_model->isLoggedIn();

        $user_id=$this->input->post('user_id');
        $state= sha1($this->input->post('password'));

        $data = array(
          'user_password' => $state,
          );

        $this->db->where('user_id', $user_id);
        $this->db->update('crm_auth', $data);
        echo '<script>alert("Password changed")</script>';
        redirect('Admin/display_program_user');
    }

    public function change_u_password(Type $var = null)
    {
        $this->Auth_model->isLoggedIn();

        $user_id=$this->input->post('user_id');
        $state= sha1($this->input->post('password'));

        $data = array(
          'user_password' => $state,
          );

        $this->db->where('user_id', $user_id);
        $this->db->update('crm_auth', $data);
        echo '<script>alert("Password changed")</script>';
        redirect('Admin/display_program_user');
    }

    public function change_u_password2(Type $var = null)
    {
        $this->Auth_model->isLoggedIn();

        $user_id=$this->input->post('user_id');
        $state= sha1($this->input->post('password'));

        $data = array(
          'user_password' => $state,
          );

        $this->db->where('user_id', $user_id);
        $this->db->update('user', $data);
        echo '<script>alert("Password changed")</script>';
        redirect('Admin/display_user');
    }


}
