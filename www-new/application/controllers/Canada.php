<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Canada extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->Model('Testimonials_model');
        $this->load->Model('Contact_model');
        $this->load->Model('Auth_model');
        $this->load->Model('Innerpage_model');
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
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-in-black-coat-taking-photos-3775551.jpg';
        $data['text'] = "<p>Do you plan on Visiting Canada for Tourism, meet family or Business activities? We know how difficult it could be just getting that simple visit visa. Let us strengthen your application not with documentation, but with experience and with loads of information. Most travellers need a visa or an Electronic Travel Authorization (eTA) to fly to, or transit through, a Canadian airport.</p>

<p>The type of Visa is determined based on the following:</p>

<ul>
 <li>* Type of travel document.</li>
 <li>* Nationality and Passport</li>
 <li>* Will you arrive into Canada by Air, Land or Sea?</li>
</ul>";
        $data['title'] = "Visitor Visas";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function visitor()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-in-black-coat-taking-photos-3775551.jpg';
        $data['text'] = "<p>Do you plan on Visiting Canada for Tourism, meet family or Business activities? We know how difficult it could be just getting that simple visit visa. Let us strengthen your application not with documentation, but with experience and with loads of information. Most travellers need a visa or an Electronic Travel Authorization (eTA) to fly to, or transit through, a Canadian airport.</p>

<p>The type of Visa is determined based on the following:</p>

<ul>
	<li>* Type of travel document.</li>
	<li>* Nationality and Passport</li>
	<li>* Will you arrive into Canada by Air, Land or Sea?</li>
</ul>";
        $data['title'] = "Visitor Visa";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function student()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
  ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'three-persons-sitting-on-the-stairs-talking-with-each-other-1438072.jpg';
        $data['text'] = "<p>Want to Study further towards a better career? Choose your preferred program, let us handle the rest. Canada welcomes hundreds of thousands of students each year. Student can study and work while on a Study permit. Your study permit is granted after a number of factors have been examined: You must have sufficient funds to support yourself and pay tuition fees. You must not be medically or criminally inadmissible. Prove to an officer that you will depart Canada at the end of your studies.</p>";
        $data['title'] = "Student Visa";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function federal()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
    ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'photography-of-a-person-pointing-on-something-684387.jpg';
        $data['text'] = "<p>Are you highly skilled, Fluent in English with professional qualifications? Want to Immigrate to Canada. They just might be looking for you! Don&rsquo;t worry; you don&rsquo;t need any province or family member to sponsor you. You got this one on your own . The FSW Express Entry Program is designed specifically for highly skilled workers outside Canada. A combination of Employment, Education, English or French ability helps determine a successful applicant.</p>

<p>With the new express entry, 90% of applications are officially processed within 6 months.</p>

<h6>Benefit:</h6>

<ul>
	<li>* Call Canada your home.</li>
	<li>* Free Medical System for all family members irrespective of your income.</li>
	<li>* Free Education for children until High School.</li>
	<li>* Apply for Citizenship after 3 years of residence.</li>
	<li>* Live, Work or Study anywhere in Canada</li>
	<li>* Many more&hellip;.</li>
</ul>";
        $data['title'] = "Federal Skilled Worker";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function provincial()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
      ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'woman-wearing-red-and-black-checkered-blouse-using-macbook-1181472.jpg';
        $data['text'] = "<p>Having a tough time with reaching the required score for the Federal Visa process? Do you have ties such as family, prior work, and/or studies in a specific Canadian Province or Territory? This might just be for you! . Most provinces and territories in Canada can nominate immigrants through the Provincial Nominee Program (PNP). These immigrants must have the skills; education and work experience to contribute to the economy of that province or territory, and must want to live there. Each province and territory has its own immigration programs that target certain groups and criteria for their PNP. For example, in a program stream, provinces and territories may target students, business people, skilled workers or semi-skilled workers.</p>

<h6>Benefits:</h6>

<ul>
	<li>* Call Canada your home.</li>
	<li>* Free Medical System for all family members irrespective of your income.</li>
	<li>* Free Education for children until High School.</li>
	<li>* Apply for Citizenship once eligible.</li>
	<li>* Live, Work or Study in the Sponsoring province</li>
	<li>* Many more&hellip;.</li>
</ul>";
        $data['title'] = "Provincial Nomination Program";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function experience()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
        ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-wearing-gray-dress-shirt-and-blue-jeans-3184317.jpg';
        $data['text'] = "<p>Work, Work and Work! Have you worked in Canada, contributed to the economy, paid your taxes on time, established into society? Let us help you become a Permanent Resident. The Government of Canada introduced the CEC program based on facts how well workers integrated into the Canadian Society. They work hard, pay taxes and which is why this program was aimed to help applicants with Canadian Work experience settle permanently. Through the Express Entry channel, an applicant can apply under the CEC.</p>

<h3>Benefits:</h3>

<ul>
	<li>* Call Canada your home.</li>
	<li>* Free Medical System for all family members irrespective of your income.</li>
	<li>* Free Education for children until High School.</li>
	<li>* Apply for Citizenship once eligible.</li>
	<li>* Live, Work or Study anywhere in Canada</li>
	<li>* Many more&hellip;.</li>
</ul>";
        $data['title'] = "Canadian Experience Class";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function atlantic()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
          ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-wearing-gray-dress-shirt-and-blue-jeans-3184317.jpg';
        $data['text'] = "<p>Interested in migrating to one of the four Atlantic Provinces: New Brunswick, Newfoundland and Labrador, Nova Scotia or Prince Edward Island? Do you have a Job offer? . The Atlantic Immigration Pilot is a partnership between the Government of Canada and the four Atlantic provinces . The Atlantic Immigration Pilot lets Atlantic employers hire qualified candidates for jobs that they haven&rsquo;t been able to fill locally. You can be living abroad or be in Canada temporarily. You must have a job offer before you can apply.</p>";
        $data['title'] = "Atlantic Immigration Pilot Program";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function temporary()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
            ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'man-wearing-gray-dress-shirt-and-blue-jeans-3184317.jpg';
        $data['text'] = "<p>To make those $$$ in Canada, you must have permission to work. Citizens and Residents can work without permission. However as a Temporary foreign worker, In most cases you would need to provide an LMIA (Labor Market Impact Assessment). Your organization would need to prove that there is no Canadian Resident willing and able before you can hire from outside Canada.</p>

<p>Sounds complicated!! Let us handle that hectic process for you.</p>";
        $data['title'] = "Temporary Foreign Workers";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function spouse()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
              ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'hands-people-friends-communication-45842.jpg';
        $data['text'] = "<p>We know how difficult it is without your spouse or partner. Allow us to help you ease the process. You may be eligible to sponsor your spouse or partner if you are a Canadian Citizen or Permanent Resident. You must be 18 years of age or over. As a Sponsor, you must meet certain eligibility criteria. As an Applicant, you must prove that your relationship with the Sponsor is genuine along with other documentation. We got you covered with our detailed checklist of documents. You won&rsquo;t miss a thing!!</p>";
        $data['title'] = "Spouse/Common-law Sponsorship";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function Parent()
    {
        $data['meta_title'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE
                ';
        $data['meta_description'] = 'Step-by-Step Visas is a Canadian immigration service company in UAE. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant';
        $data['meta_keywords'] = 'Step-By-Step Visas Canada Immigration Services in UAE| Free Assessment| Australia| Consultant | CanadianImmigration Company UAE';
        $data['testimonial'] = $this->Testimonials_model->testimonial();
        $data['contact_us'] = $this->Contact_model->contact_us();
        $data['img'] = 'two-adult-women-beside-each-other-3768114.jpg';
        $data['text'] = "<p>Would you like to Sponsor your Parents or Grandparents to permanently live in Canada? Are you a Canadian Citizen or Permanent Resident? You would need to meet certain financial requirements. Invitations are limited and selected randomly. Let us help and assist you before and after you are invited.</p>";
        $data['title'] = "Parent / Grandparent Sponsorship";
        $this->load->view('web/partials/header_clone', $data);
        $this->load->view('web/canada/index_clone', $data);


        // $this->load->view('web/partials/review');

        $this->load->view('web/partials/footer_clone', $data);
    }

    public function canada()
    {
        $this->Auth_model->isLoggedIn();

        $data['title'] = 'Users';
        $data['canada'] = $this->Innerpage_model->canada();
        $this->load->view('admin/partials/header');
        $this->load->view('admin/canada', $data);
        $this->load->view('admin/partials/footer');
    }

    public function update_canada()
    {

        // $this->Auth_model->isLoggedIn();

        $id = $this->input->get('id');
        $data['canada_detail'] = $this->Innerpage_model->get_canada_detail($id);

        $this->load->view('admin/partials/header');
        $this->load->view('admin/update_canada', $data);
        $this->load->view('admin/partials/footer');

    }

    public function updated_canada()
    {




        $id = $this->input->post('id');
        $text = $this->input->post('text');



        $config = array(

           'upload_path'   => './assets/web/img/',
           'allowed_types' => 'gif|jpg|png|jpeg|txt|xls|xlsx|doc|docx|pdf|ppt|csv',
           'max_size'      => '5000',
           'max_width'     => '5024',
           'max_height'    => '5024',
           'encrypt_name'  => true,
           'remove_space'  => false,

            );

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('pic')) {

            $data_ary = array(
            'id' => $id,
            'text' => $text,


            );

            $result = $this->Innerpage_model->update_canada($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Canada Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'Canada/canada', 'refresh');

        } else {

            $upload_data = $this->upload->data();

            $data_ary = array(

            'id' => $id,
            'text' => $text,


            'pic' => $upload_data['file_name'],

            );

            $result = $this->Innerpage_model->update_canada($data_ary);

            if($result == "1") {

                $this->session->set_flashdata('success_msg', 'Updated Canada Page Successfully');

            } else {

                $this->session->set_flashdata('failure_msg', 'Failed to Update!');

            }

            redirect(base_url().'Canada/canada', 'refresh');
        }


    }



}
