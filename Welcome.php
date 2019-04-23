<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 

{

function __construct()
 {
      parent::__construct();

  $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
          $this->load->library('form_validation');
       
        
        $this->load->database();
        $this->load->model('Capitalinfo_model');


  }

  public function index()
  {
    $this->load->model('Capitalinfo_model','',TRUE);
        $data["metadata"] = $this->Capitalinfo_model->get_metadata("home");

      $data["logo"] = $this->Capitalinfo_model->all_logo();
         $data["demo"]= $this->Capitalinfo_model->view_alldemo();
         
         
            
            $data['popupdemo']=$this->Capitalinfo_model->view_allpopupdemo();  
            
         $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
         $data["picture_list"] = $this->Capitalinfo_model->get_all_pics();  
          $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
           $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
            $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
              $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
              $data["blog_list"] = $this->Capitalinfo_model->get_all_blog();

               $data["testimonials"] = $this->Capitalinfo_model->all_testimonial();
                  $data["popup_list"] = $this->Capitalinfo_model->get_all_popup();
          
             
        $this->load->view('header',$data);
    $this->load->view('index',$data);
      $this->load->view('footer',$data);  
  }


 public function redirection($url)
  {
    $this->load->model('Capitalinfo_model','',TRUE);
    $data["metadata"] = $this->Capitalinfo_model->get_metadata("$url");
     $data["logo"] = $this->Capitalinfo_model->all_logo();
     $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();


     $data["course_list"] = $this->Capitalinfo_model->get_all_courses();
      $data["service_list"] = $this->Capitalinfo_model->get_all_services();
       $data["blog_list"] = $this->Capitalinfo_model->get_all_blog();
       $data["address_list"] = $this->Capitalinfo_model->get_all_address();
         $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
           $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
           $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
             $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
                 $data["interview_list"] = $this->Capitalinfo_model->get_all_interview();
     $this->load->view('header',$data);
    $this->load->view($url);
 $this->load->view('footer',$data);
  }


  public function services_redirection($url)
  {
      $this->load->model('Capitalinfo_model','',TRUE);
    $data["metadata"] = $this->Capitalinfo_model->get_metadata("$url");
     $data["logo"] = $this->Capitalinfo_model->all_logo();
     $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
       $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
         $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
         $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
           $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
    $this->load->view('header',$data);
    $this->load->view($url);
      $this->load->view('footer',$data);
  }


    public function courses_redirection($url)
  {
    $this->load->model('Capitalinfo_model','',TRUE);
    $data["metadata"] = $this->Capitalinfo_model->get_metadata("$url");
     $data["logo"] = $this->Capitalinfo_model->all_logo();
     $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
     $data["course_list"] = $this->Capitalinfo_model->get_all_courses();
       $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
         $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
         $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
           $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();

    

     $this->load->view('header',$data);

     $this->load->view($url);
     $this->load->view('footer',$data);
  
  }

  
  public function blog_redirection($url)
  {
   $this->load->model('Capitalinfo_model','',TRUE);
    $data["metadata"] = $this->Capitalinfo_model->get_metadata("$url");
     $data["logo"] = $this->Capitalinfo_model->all_logo();
     $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
     $data["blog_list"] = $this->Capitalinfo_model->get_all_blog();
       $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
         $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
         $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
           $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
      $this->load->view('header',$data);
    $this->load->view($url);
   $this->load->view('footer',$data);
  }

  
function sendMail() {


          $from_email = "capitalinfosol@gmail.com"; 
         
           $name = $this->input->post('name'); 
           $email = $this->input->post('email'); 
           $phone = $this->input->post('phone');
    
           $message = $this->input->post('message'); 
           
$message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Name</th> 
                   <th style='border:1px solid;'>Email</th>
                     <th style='border:1px solid;'>Phone</th>
                   
                      <th style='border:1px solid;'>Message</th>
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$phone."</td><td style='border:1px solid;'>".$message."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
         
         
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com'); 
         $this->email->to($to_email);
         $this->email->subject('Contact');  
         $this->email->message("For Contact ".$message1);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('contact-us');
           
        // echo "mail has been sent ";
           
           }
           
         else {
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}
         
  function sendDemo() 
    {
    
      $this->load->library('session'); 
         $this->load->helper('url'); 
             $from_email = "capitalinfosol@gmail.com"; 
             $name = $this->input->post('name'); 
             $email = $this->input->post('email'); 
             $phone = $this->input->post('phone'); 
             $message = $this->input->post('message'); 
             $message1 = "<table style='border:1px solid;'>
                             <tr style='border:1px solid;'>
                                 <th style='border:1px solid;'>Name</th>
                                 <th style='border:1px solid;'>Email</th>
                                 <th style='border:1px solid;'>Phone</th>
                                 <th style='border:1px solid;'>Message</th>
                              </tr>

                              <tr style='border:1px solid;'>
                                  <td style='border:1px solid;'>".$name."</td>
                                  <td style='border:1px solid;'>".$email."</td>
                                  <td style='border:1px solid;'>".$phone."</td>
                                  <td style='border:1px solid;'>".$message."</td>
                              </tr>
                         </table> ";  
             $to_email ="capitalinfosol@gmail.com"; 
             //Load email library 
             $this->load->library('email'); 
             $this->email->set_mailtype("html");
             $this->email->from($from_email, 'Capital info solutions');   
             $this->email->to($to_email);
             $this->email->subject('New Demo/Batches'); 
             $this->email->message("For Demo/Batches ".$message1); 
             //Send mail 
             if($this->email->send()) 
             //$this->session->set_flashdata("email_sent","Email sent successfully."); 
           echo "mail has been sent ";
             else 
             // $this->session->set_flashdata("email_sent","Error in sending Email."); 
             echo "mail Not  sent ";
             // $this->load->view('email_form'); 
    }

    
  
      

function online() {


            $from_email = "capitalinfosol@gmail.com";   
        
            $name = $this->input->post('name'); 
            $email = $this->input->post('email'); 
            $mobile = $this->input->post('mobile');
            $course = $this->input->post('course');
            
        
  $message = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>name</th> 
                   <th style='border:1px solid;'>email</th>
                     <th style='border:1px solid;'>mobile</th>
                   
                      <th style='border:1px solid;'>course</th>
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
         
         
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com'); 
         $this->email->to($to_email);
         $this->email->subject('Online Training');  
         $this->email->message("For Online Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-online-training');
           
        // echo "Your Registration is Successful! We will get contact you soon. ";
           //redirect('faculty-registration');
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}


function crm_mail() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
          $course = $this->input->post('course');
          $optradio = $this->input->post('optradio');
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                  <th style='border:1px solid;'>Training Types</th>
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td><td style='border:1px solid;'>".$optradio."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
         
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-crm');
           
        echo "Your Registration is Successful! We will get contact you soon. ";
           //redirect('faculty-registration');
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}


function salesforce_crm_training() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
         
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/salesforce-crm-training'); 
           
        echo "Your Registration is Successful! We will get contact you soon. ";
           //redirect('faculty-registration');
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}

function salesforce_development() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
         
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/salesforce-development'); 
           
        echo "Your Registration is Successful! We will get contact you soon. ";
           //redirect('faculty-registration');
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}

function salesforce_integration() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/salesforce-integration'); 
           
        echo "Your Registration is Successful! We will get contact you soon. ";
           //redirect('faculty-registration');
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}


function salesforce_lightning_training() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/salesforce-lightning-training'); 
           
        
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}



function devops_training_in_hyderabad() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/devops-training-in-hyderabad'); 
           
        
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}


function oracle_dba() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/oracle-dba');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
         
             
        // $this->load->view('email_form');
  

}


function amazon_web_services() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/amazon-web-services');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}
function hadoop_training() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/hadoop');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}


function automation_framework() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce Training');  
         $this->email->message("For Salesforce Training ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('courses/automation-framework');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}



function salesforce_training_in_bangalore() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce training in bangalore');  
         $this->email->message("For salesforce training in bangalore ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-training-in-bangalore');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}

function salesforce_training_in_india() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce training in India');  
         $this->email->message("For salesforce training in India ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-training-in-india');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}

function salesforce_training_in_hyderabad() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce training in hyderabad');  
         $this->email->message("For salesforce training in hyderabad ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-training-in-hyderabad');    
           
          
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}


function salesforce_training_in_ameerpet() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce training in ameerpet');  
         $this->email->message("For salesforce training in ameerpet ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-training-in-ameerpet');    
        
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}

function salesforce_training_cost_in_hyderabad() {


          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce training ');  
         $this->email->message("For salesforce training  ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect('salesforce-training-cost-in-hyderabad');    
        
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
    
        // $this->load->view('email_form');
  

}


function register_now() {

          $from_email = "capitalinfosol@gmail.com";   
          
          $name = $this->input->post('name'); 
          $email = $this->input->post('email'); 
          $mobile = $this->input->post('mobile');
          $course = $this->input->post('course');
         
         
          
     
  $message = "<table style='border:1px solid;'>

                 <tr style='border:1px solid;'>
                 <th style='border:1px solid;'>name</th> 
                 <th style='border:1px solid;'>email</th>
                  <th style='border:1px solid;'>mobile</th>
                   
                  <th style='border:1px solid;'>course</th>
                      
                 
                  
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$mobile."</td><td style='border:1px solid;'>".$course."</td></tr>
                  </table> ";
         
    $to_email ="capitalinfosol@gmail.com"; 
            
            
   
         //Load email library 
         $this->load->library('email'); 
          $this->email->set_mailtype("html");
   
         $this->email->from($from_email, 'capitalinfosol@gmail.com');   
         $this->email->to($to_email);
         $this->email->subject('Salesforce training ');  
         $this->email->message("For salesforce training  ".$message);  
   
         //Send mail 
           if($this->email->send()) 
         {
         $this->session->set_flashdata('email_sent',"Contact Successfully");
        redirect(base_url());  
        
           }
           
         else 

         {
          
        // $this->session->set_flashdata('email_sent',"Error in sending Email."); 
           echo "mail Not  sent ";
        }
        
     
        // $this->load->view('email_form');
  

}




public function faculty_registration()
  {
       if (isset($_POST['send'])){
        $data = array('name'=>$_POST['name'],
                      'phone'=>$_POST['phone'],
                'email'=>$_POST['email'],
               
                'course'=>$_POST['course'],
                'optradio'=>$_POST['optradio'],
                // 'myfile'=>$_POST['myfile'],
              
          
           ); 
           $this->load->model('Capitalinfo_model');
           $this->Capitalinfo_model->insert_facultyregister($data);
             $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
       
          $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
           $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
            $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
              $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
           $this->load->view("header",$data);
           $this->load->view("faculty-registration",$data);
           $this->load->view("footer",$data);
                
                
                 
                  
                  $from_email = "capitalinfosol@gmail.com"; 
         
         
        
          $name = $this->input->post('name'); 
           $phone= $this->input->post('phone'); 
           $email = $this->input->post('email'); 
            $course = $this->input->post('course');
            $optradio = $this->input->post('optradio'); 
              // $myfile = $this->input->post('myfile'); 
           
 $message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Name</th> 
                   <th style='border:1px solid;'>Contact NO</th>
                     <th style='border:1px solid;'>Mail ID</th>
                      <th style='border:1px solid;'>Course</th>
                       <th style='border:1px solid;'>Training Type</th>
                      
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$phone."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$course."</td><td style='border:1px solid;'>".$optradio."</td><td style='border:1px solid;'>".$myfile."</td></tr>
                  </table>"; 
                      $to_email ="capitalinfosol@gmail.com";   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
         $this->email->from($from_email, 'Capital Info Solutions'); 
         $this->email->to($to_email);
         $this->email->subject('Contact'); 
         $this->email->message("Faculty Registration ".$message1); 
      
   
         //Send mail 
         if($this->email->send()) 
         {
        $this->session->set_flashdata('email_sent',"Faculty Registration Successfully");
       redirect('faculty-registration');
           
        //echo "mail has been sent ";
           //redirect('faculty-registration');
           }
           
         else {
        $this->session->set_flashdata('email_sent',"Error in sending Email."); 
        }
        
         // echo "mail Not  sent ";
             
        // $this->load->view('email_form');
    }
    
    
   }
      





 public function view_batches()
       {
            $this->load->model('Capitalinfo_model'); 
      $data["batches"]=$this->Capitalinfo_model->get_batches();
       $data["logo"] = $this->Capitalinfo_model->all_logo();
       $data["courses"]=$this->Capitalinfo_model->get_courses();
       $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
       $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
        $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
       $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
            $uniqueCourses = array();
            foreach($data["batches"] as $batch)
            {
                
                if(!in_array(array($batch->course_name,$batch->course_id),$uniqueCourses)) 
                {
                    $uniqueCourses[]=array($batch->course_name,$batch->course_id);
                }
                
            }
            $data["uniqueCourses"] = $uniqueCourses;
            //var_dump($uniqueCourses);

        $data["metadata"] = $this->Capitalinfo_model->get_metadata("batches");
         $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
        $this->load->view('header',$data);
      $this->load->view('batches', $data);
          $this->load->view('footer',$data);
       }
       
       
        public function salesforce_crm()

    {
      $this->load->model('Capitalinfo_model','',TRUE);
     $data["metadata"] = $this->Capitalinfo_model->get_metadata("salesforce-crm");

      $data["logo"] = $this->Capitalinfo_model->all_logo();
         $data["demo"]= $this->Capitalinfo_model->view_alldemo();
         $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
         $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
       $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
        $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
       $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
 $this->load->view('header', $data);
    $this->load->view('salesforcecrm/index',$data);
   
  
    }
    
        public function salesforce_online_training()

    {
      $this->load->model('Capitalinfo_model','',TRUE);
     $data["metadata"] = $this->Capitalinfo_model->get_metadata("salesforce-online-training");

      $data["logo"] = $this->Capitalinfo_model->all_logo();
         $data["demo"]= $this->Capitalinfo_model->view_alldemo();
         $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
         $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
       $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
        $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
       $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
 $this->load->view('header', $data);
    $this->load->view('salesforcecrm/online_training',$data);
   
  
    }


// **************Admin Panel start**********************



 public function my_admin()
  {
   $this->load->view('admin/header');
    
    $this->load->view('admin/index');
   $this->load->view('admin/footer');
}


 public function input()
  {
    //$data = array();
     
      $this->load->model('Capitalinfo_model');
     $data["courses"] = $this->Capitalinfo_model->get_courses();   
     $data["types"] = $this->Capitalinfo_model->get_batchtypes(); 
    
    $data["faculty"] = $this->Capitalinfo_model->get_faculty(); 


    
   $this->load->view('admin/header');
    $this->load->view('admin/new_batches',$data);
     
   $this->load->view('admin/footer');
}

public function tabels()
  {
   
    
     $this->load->model('Capitalinfo_model');
    
    

    $data["batch_list"] = $this->Capitalinfo_model->get_batchdetails();
    
   
    
   
   

    $this->load->view('admin/header');

    
    $this->load->view('admin/view_batches', $data);
     $this->load->view('admin/footer');

}



public function insert_batch()

  {

  $this->load->model('Capitalinfo_model');
     if(isset($_POST['update'])){
             

  $data = array('course_id'=>$_POST['course_name'],
                    'faculty_id'=>$_POST['faculty'],
              'dates'=>$_POST['date'],
              'start_time'=>$_POST['start_time'],
              'end_time'=>$_POST['end_time'],
              'duration'=>$_POST['duration'],
              // 'upcoming_batch'=> $_POST['upcoming_batch'],
              'type_id'=>$_POST['type']
            );

                     $this->Capitalinfo_model->update_batch($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/updated_batch");  
                } 



   if (isset($_POST['create']))
  { 

        $data = array('course_id'=>$_POST['course_name'],
                   // 'status'=>$_POST['status'],
              'faculty_id'=>$_POST['faculty'],
              'dates'=>$_POST['date'],
              'start_time'=>$_POST['start_time'],
              'end_time'=>$_POST['end_time'],
              'duration'=>$_POST['duration'],
              // 'upcoming_batch'=> $_POST['upcoming_batch'],
              'type_id'=>$_POST['type']
            );
       
       
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->new_batch($data);
             
             redirect('Welcome/tabels'); 


    }

   }


    public function update_batch()
     
        { 

          $user_id = $this->uri->segment(3); 

       $this->load->model("Capitalinfo_model");  
      $data["batch_list"] = $this->Capitalinfo_model->fetch_single_batch($user_id);  
      $data["courses"] = $this->Capitalinfo_model->get_courses();
     $data["faculty_list"] = $this->Capitalinfo_model->get_faculty();
             $data["type_list"] = $this->Capitalinfo_model->get_batchtypes();
            $this->load->view("admin/header");  
            $this->load->view("admin/new_batches" ,$data);  
             $this->load->view("admin/footer");  
               
         }

        public function updated_batch()  
       {  
           $this->tabels();  
       }



     public function delete_batch()
        {  
           $id = $this->uri->segment(3);  
         
       
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_batch($id);  
           redirect(base_url() . "Welcome/deleted_batch");  
        }

       public function deleted_batch()  
      {  
           $this->tabels();  
      } 
// *************************************user login ********************************

       public function signin()
  {
      
    
    $this->load->view('admin/signin');
    
  }


       public function process()  

      {  
        $user = $this->input->post('username');  
        $pass = $this->input->post('password');  
        if ($user=='admin' && $pass=='admin123$')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            $this->load->view('admin/header');  
            $this->load->view('admin/index');  
            $this->load->view('admin/footer');  
        }  
        else

        {  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('admin/signin', $data);  
        }  
    } 


      public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('username');  
        redirect("index.php/Welcome/signin");  
    }  

// *************************************user login  End********************************


    // **********************************************Seo part start***************************

  public function new_seo()
  {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_seo');
    $this->load->view('admin/footer');
  
  }

  
  public function insert_seo()
  {  

    $this->load->model('Capitalinfo_model');
     if(isset($_POST['update']))
     {
                

  $data = array('page_name'=>$_POST['page_name'],
           'title'=>$_POST['title'],
           'description'=>$_POST['description'],
           'keywords'=>$_POST['keywords'],
            'canonical'=>$_POST['canonical'],
            
            'og_title'=>$_POST['og_title'],

             'og_desc'=>$_POST['og_desc'],
              'og_key'=>$_POST['og_key'],
               'og_url'=>$_POST['og_url'],
                'og_imageurl'=>$_POST['og_imageurl'],
             
             
            );

                     $this->Capitalinfo_model->update_data($data, $this->input->post("hidden_id"));  
                  redirect(base_url() . "Welcome/updated");  
        } 
      


       if (isset($_POST['create']))
  {
        $data = array('page_name'=>$_POST['page_name'],
           'title'=>$_POST['title'],
           'description'=>$_POST['description'],
           'keywords'=>$_POST['keywords'],
           
            'canonical'=>$_POST['canonical'],
             'og_title'=>$_POST['og_title'],

             'og_desc'=>$_POST['og_desc'],
              'og_key'=>$_POST['og_key'],
               'og_url'=>$_POST['og_url'],
                'og_imageurl'=>$_POST['og_imageurl'],
          
            ); 
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->meta_tag($data);

             redirect('Welcome/viewseo'); 


    }

   }


 

  public function viewseo()

    {
      

    //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('Capitalinfo_model');  
         //load the method of model  
         $data['h']=$this->Capitalinfo_model->view_allseo();  

         //return the data in view  
          $this->load->view('admin/header'); 
         $this->load->view('admin/view_seo', $data);  
          $this->load->view('admin/footer'); 

    
  
  }

     public function update_data()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["user_data"] = $this->Capitalinfo_model->fetch_single_data($user_id);  
           $data["h"] = $this->Capitalinfo_model->view_allseo();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_seo", $data);  
           $this->load->view("admin/footer"); 

     }

      public function updated()  

       {  
           $this->viewseo();  
       }
   


     public function delete_data()

     {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_data($id);  
           redirect(base_url() . "Welcome/deleted");  
     }

       public function deleted()  
      {  
           $this->viewseo();  
      } 

      // *********************************latest demoes**********************************

        public function new_demo()
  {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_demo');
    $this->load->view('admin/footer');
  
  }


    public function insert_demo()
  {

    $this->load->model('Capitalinfo_model');

     if(isset($_POST['update']))
     {
             

      $data = array('news'=>$_POST['demo'],
      
           
     );

                 $this->Capitalinfo_model->update_demo($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_demo");  
    } 
      


       if (isset($_POST['create']))
  {
        $data = array('news'=>$_POST['demo']
           
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->new_demo($data);

             redirect('Welcome/view_demo'); 


    }

   }



        public function view_demo()
  {
    
      $this->load->database();  
         //load the model  
         $this->load->model('Capitalinfo_model');  
         //load the method of model  
         $data['demo']=$this->Capitalinfo_model->view_alldemo();  

         //return the data in view  
          $this->load->view('admin/header'); 
         $this->load->view('admin/view_demo', $data);  
          $this->load->view('admin/footer'); 
  
  }


   public function update_demo()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["demo_data"] = $this->Capitalinfo_model->fetch_single_demo($user_id);  
           $data["demo"] = $this->Capitalinfo_model->view_alldemo();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_demo", $data);  
           $this->load->view("admin/footer"); 

     }

      public function updated_demo()  

       {  
           $this->view_demo();  
       }
   

    public function delete_demo()

     {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_demo($id);  
           redirect(base_url() . "Welcome/deleted_demo");  
     }

       public function deleted_demo()  
      {  
           $this->view_demo();  
      } 
      
      
      
      // *****************Popup demoes start***********************

        public function new_popupdemo()
    {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_popupdemo');
    $this->load->view('admin/footer');
  
  }


    public function insert_popupdemo()
  {

    $this->load->model('Capitalinfo_model');

     if(isset($_POST['update']))
     {
             

      $data = array('demo'=>$_POST['demo'],
      
           
     );

                 $this->Capitalinfo_model->update_popupdemo($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_popupdemo");  
    } 
      


      if (isset($_POST['create']))
  {
        $data = array('demo'=>$_POST['demo']
           
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->new_popupdemo($data);

             redirect('Welcome/view_popupdemo'); 


    }

  }



        public function view_popupdemo()
  {
    
      $this->load->database();  
         //load the model  
         $this->load->model('Capitalinfo_model');  
         //load the method of model  
         $data['popupdemo']=$this->Capitalinfo_model->view_allpopupdemo();  

         //return the data in view  
          $this->load->view('admin/header'); 
         $this->load->view('admin/view_popupdemo', $data);  
          $this->load->view('admin/footer'); 
  
  }


  public function update_popupdemo()
      {  
 
          $user_id = $this->uri->segment(3);  
          $this->load->model("Capitalinfo_model");  
          $data["popupdemo_data"] = $this->Capitalinfo_model->fetch_single_popupdemo($user_id);  
          $data["popupdemo"] = $this->Capitalinfo_model->view_allpopupdemo();
          $this->load->view("admin/header");  
       
          $this->load->view("admin/new_popupdemo", $data);  
          $this->load->view("admin/footer"); 

     }

      public function updated_popupdemo()  

      {  
          $this->view_popupdemo();  
      }
   

    public function delete_popupdemo()

     {  
          $id = $this->uri->segment(3);  
          $this->load->model("Capitalinfo_model");  
          $this->Capitalinfo_model->delete_popupdemo($id);  
          redirect(base_url() . "Welcome/deleted_popupdemo");  
     }

      public function deleted_popupdemo()  
      {  
          $this->view_popupdemo();  
      } 
// *****************************************pop up demo end................
// *****************************************social address settings.........................




       public function view_settings()
    {
    
    
         
$this->load->model('Capitalinfo_model');

   $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
         
          $this->load->view('admin/header'); 
         $this->load->view('admin/view_settings',$data);  
          $this->load->view('admin/footer'); 
  
  }


  public function insert_setting()
  {
     $this->load->model('Capitalinfo_model');
   if(isset($_POST['update'])){
             

  $data = array('mobile_no'=>$_POST['mobile_no'],
                     'mail_id'=>$_POST['mail_id'],
           'facebook_link'=>$_POST['facebook_link'],
           'twitter_link'=>$_POST['twitter_link'],
            'pinterest_link'=>$_POST['pinterest_link'],
             'linkedin_link'=>$_POST['linkedin_link']
            );

                     $this->Capitalinfo_model->update_setting($data, $this->input->post("hidden_id"));  

                     redirect(base_url() . "Welcome/updated_setting");  
                }  

   }

    public function update_setting()
     
     { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("capitalinfo_model");  
           $data["setting_data"] = $this->Capitalinfo_model->fetch_single_setting($user_id);  
           $data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
           
                $this->load->view("admin/header");  
            $this->load->view("admin/update_settings" ,$data);  

                $this->load->view("admin/footer");  
           
               
     }

      public function updated_setting()  
      {  
           $this->view_settings();  
      }

      // *************************************social media part end*************************************


// **********************************banner part start*******************************************

        public function new_banner()
  {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_banner');
    $this->load->view('admin/footer');
  
    }


     public function file_input()

      {
         
                $this->load->model("Capitalinfo_model");  

                $data = array(  
                     "pic_title" =>$this->input->post("pic_title"),  
                     // "pic_desc"  =>$this->input->post("pic_desc"),
                     // "pic_file"  =>$this->input->post("pic_file")  
                ); 


                 if($_FILES['pic_file']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png|webp';  
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( !$this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_banner', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['pic_file'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }


             if($this->input->post("update"))  
                {  
                     $this->Capitalinfo_model->update_banner($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/view_banner");  
                }  

                   if($_FILES['pic_file']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png|webp';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_banner', $error);
      }

      else{

        //file is uploaded successfully
        //now get the file uploaded data 
        $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['pic_file'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_pic_data($data);

        redirect('Welcome/view_banner');
      }
      }
       else{
             $image_name=$this->input->post('old');
            }

            $this->load->view('admin/header');
            $this->load->view('admin/new_banner');
                
        $this->load->view('admin/footer');
    }


      public function view_banner()
  {
    
      
      $this->load->model('Capitalinfo_model');

    $data["picture_list"] = $this->Capitalinfo_model->get_all_pics();
         $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_banner', $data);
         $this->load->view('admin/footer'); 
  
    }

     public function update_banner()
     
     { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["banner_data"] = $this->Capitalinfo_model->fetch_single_banner($user_id);  
           $data["picture_list"] = $this->Capitalinfo_model->get_all_pics();
           
            $this->load->view("admin/header");  
            $this->load->view("admin/new_banner" ,$data);  
             $this->load->view("admin/footer");  
               
     }

      public function updated_banner()  
      {  
           $this->view_banner();  
      }



   

        public function delete_banner()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_banner($id);  
           redirect(base_url() . "Welcome/deleted_banner");  
      }

       public function deleted_banner()  
      {  
           $this->view_banner();  


      } 


// *******************************************banner part end *************************************************


      // **********************************Popup part start*******************************************

        public function new_popup()
        
    {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_popup');
    $this->load->view('admin/footer');
  
    }


     public function popup_input()

 {
         
                $this->load->model("Capitalinfo_model");  

                // $data = array(  
                //      "pic_title" =>$this->input->post("pic_title"),  
                //      // "pic_desc"  =>$this->input->post("pic_desc"),
                //      // "pic_file"  =>$this->input->post("pic_file")  
                // ); 


                 if($_FILES['pic_file']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( !$this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_popup', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['pic_file'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }


             if($this->input->post("update"))  
                {  
                     $this->Capitalinfo_model->update_popup($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/view_popup");  
                }  

                   if($_FILES['pic_file']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('pic_file')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_popup', $error);
      }

      else{

        //file is uploaded successfully
        //now get the file uploaded data 
        $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['pic_file'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_popup_data($data);

        redirect('Welcome/view_popup');
      }
      }
       else{
             $image_name=$this->input->post('old');
            }

            $this->load->view('admin/header');
            $this->load->view('admin/new_popup');
                
        $this->load->view('admin/footer');
    }
  


      public function view_popup()
    {
    
      
    $this->load->model('Capitalinfo_model');

    $data["popup_list"] = $this->Capitalinfo_model->get_all_popup();
    $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_popup', $data);
         $this->load->view('admin/footer'); 
  
     }

     public function update_popup()
     
     { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["popup_data"] = $this->Capitalinfo_model->fetch_single_popup($user_id);  
           $data["popup_list"] = $this->Capitalinfo_model->get_all_popup();
           
            $this->load->view("admin/header");  
            $this->load->view("admin/new_popup" ,$data);  
             $this->load->view("admin/footer");  
               
     }

      public function updated_popup()  
      {  
           $this->view_popup();  
      }



   

       

// *******************************************popup part end *************************************************

      // ****************************************************courses part start***************************************




        public function new_course()
  {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_course');
    $this->load->view('admin/footer');
  
    }

      public function insert_course()

      { 

     $this->load->model('Capitalinfo_model');
     if(isset($_POST['update'])){
             

       $data = array('c_name'=>$_POST['c_name'],
                     'alt_tag'=>$_POST['alt_tag'],
                     'url'=>$_POST['url'],
                      //'course_image'=>$_POST['course_image'],
           
          );
       if($_FILES['course_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('course_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_course', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['course_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }





                     $this->Capitalinfo_model->update_course($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/updated_course");  
              } 

       $data = array(  
                     "c_name" =>$this->input->post("c_name"), 
                      'alt_tag'=>$_POST['alt_tag'], 
                     "url"  =>$this->input->post("url"),
                    // "course_image"  =>$this->input->post("course_image")  
                ); 


           
                   if($_FILES['course_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('course_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_course', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['course_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_course_data($data);

        redirect('Welcome/view_course');
      }
    }
       
                
        $this->load->view('admin/header');
        $this->load->view('admin/view_course');
        $this->load->view('admin/footer');
    }



         public function view_course()
  {
    
      
     $this->load->model('Capitalinfo_model');
 $data["course_list"] = $this->Capitalinfo_model->get_all_courses();
         $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_course',$data);
         $this->load->view('admin/footer'); 
  
    }



         public function update_course()
     
       { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["course_data"] = $this->Capitalinfo_model->fetch_single_course($user_id);  
           $data["course_list"] = $this->Capitalinfo_model->get_all_courses();
           
          $this->load->view("admin/header");  
          $this->load->view("admin/new_course",$data);  
           $this->load->view("admin/footer");  
               
       }

      public function updated_course()  
      {  
           $this->view_course();  
      }

      public function delete_course()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_course($id);  
           redirect(base_url() . "Welcome/deleted_course");  
      }

       public function deleted_course()  
      {  
           $this->view_course();  


      } 


      // *******************************************courses part end *************************************************

      // ****************************************************services part start***************************************


             public function view_services()
  {
    
      
     $this->load->model('Capitalinfo_model');
 $data["service_list"] = $this->Capitalinfo_model->get_all_services();
         $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_services',$data);
         $this->load->view('admin/footer'); 
  
    }


      function new_services()
 {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_services');
        $this->load->view('admin/footer');
  }


   public function insert_services()

      { 

     $this->load->model('Capitalinfo_model');
     if(isset($_POST['update'])){
             

       $data = array('s_name'=>$_POST['s_name'],
                     'content'=>$_POST['content'],
                     'service_url'=>$_POST['service_url'],
                      //'course_image'=>$_POST['course_image'],
           
          );
       if($_FILES['service_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('service_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_services', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['service_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }

         $this->Capitalinfo_model->update_services($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/updated_services");  
              } 

       $data = array(  
                     "s_name" =>$this->input->post("s_name"), 
                       "content" =>$this->input->post("content"), 
                   
                     "service_url"  =>$this->input->post("service_url"),
                    // "course_image"  =>$this->input->post("course_image")  
                ); 


           
            if($_FILES['service_image']['name']!="")

               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('service_image'))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_service', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['service_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_service_data($data);

        redirect('Welcome/view_services');
      }
    }
       
                
        $this->load->view('admin/header');
        $this->load->view('admin/view_course');
        $this->load->view('admin/footer');
    }


  public function update_services()
     
       { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["service_data"] = $this->Capitalinfo_model->fetch_single_services($user_id);  
           $data["service_list"] = $this->Capitalinfo_model->get_all_services();
           
          $this->load->view("admin/header");  
          $this->load->view("admin/new_services",$data);  
           $this->load->view("admin/footer");  
               
       }

      public function updated_services()  
      {  
           $this->view_services();  
      }


          public function delete_services()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_services($id);  
           redirect(base_url() . "Welcome/deleted_services");  
      }

       public function deleted_services()  
      {  
           $this->view_services();  


      } 

        // *******************************************services part end *************************************************

      // ****************************************************Blog part start***************************************

      
           public function view_blog()
  {
    
      
     $this->load->model('Capitalinfo_model');
 $data["blog_list"] = $this->Capitalinfo_model->get_all_blog();
         $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_blog',$data);
         $this->load->view('admin/footer'); 
  
    }


      function new_blog()
 {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_blog');
        $this->load->view('admin/footer');
  }




 
   public function insert_blog()

      { 

     $this->load->model('Capitalinfo_model');
     if(isset($_POST['update'])){
             

       $data = array('blog_name'=>$_POST['blog_name'],
                      'blog_date'=>$_POST['blog_date'],
                     'blog_content'=>$_POST['blog_content'],
                       'alt_tag'=>$_POST['alt_tag'],
                     'blog_url'=>$_POST['blog_url'],
                     'blog_inner'=>$_POST['blog_inner'],
                      //'course_image'=>$_POST['course_image'],
           
          );
       if($_FILES['blog_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('blog_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_blog', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['blog_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }

         $this->Capitalinfo_model->update_blog($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/updated_blog");  
              } 

       $data = array(  
                     "blog_name" =>$this->input->post("blog_name"), 
                      "blog_date" =>$this->input->post("blog_date"),   
                       "blog_content" =>$this->input->post("blog_content"), 
                        "alt_tag" =>$this->input->post("alt_tag"), 
                   
                     "blog_url"  =>$this->input->post("blog_url"),
                    "blog_inner"  =>$this->input->post("blog_inner"),
                    // "course_image"  =>$this->input->post("course_image")  
                ); 


           
            if($_FILES['blog_image']['name']!="")

               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('blog_image'))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_blog', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['blog_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_blog_data($data);

        redirect('Welcome/view_blog');
      }
    }
       
                
        $this->load->view('admin/header');
        $this->load->view('admin/view_blog');
        $this->load->view('admin/footer');
    }


  public function update_blog()
     
       { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["blog_data"] = $this->Capitalinfo_model->fetch_single_blog($user_id);  
           $data["blog_list"] = $this->Capitalinfo_model->get_all_blog();
           
          $this->load->view("admin/header");  
          $this->load->view("admin/new_blog",$data);  
           $this->load->view("admin/footer");  
               
       }

      public function updated_blog()  
      {  
           $this->view_blog();  
      }


          public function delete_blog()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_blog($id);  
           redirect(base_url() . "Welcome/deleted_blog");  
      }

       public function deleted_blog()  
      {  
           $this->view_blog();  


      } 

        // *******************************************blog part end *************************************************
        
        
        
         // *******************************************Interview Questions part start *************************************************

    
           public function view_interview()
  {
    
      
     $this->load->model('Capitalinfo_model');
    $data["interview_list"] = $this->Capitalinfo_model->get_all_interview();
    $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_interview',$data);
    $this->load->view('admin/footer'); 
  
    }

      function new_interview()
 {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_interview');
        $this->load->view('admin/footer');
  }




 
   public function insert_interview()

      { 

     $this->load->model('Capitalinfo_model');
     if(isset($_POST['update'])){
             

       $data = array('interview_name'=>$_POST['interview_name'],
                    
                     'interview_alt'=>$_POST['interview_alt'],
                     'interview_url'=>$_POST['interview_url'],
                     'interview_date'=>$_POST['interview_date'],
                     'interview_faculty'=>$_POST['interview_faculty'],
                      //'course_image'=>$_POST['course_image'],
           
          );
       if($_FILES['interview_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('interview_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_interview', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['interview_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }

         $this->Capitalinfo_model->update_interview($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/updated_interview");  
              } 

       $data = array(  
                     "interview_name" =>$this->input->post("interview_name"), 
                      "interview_alt" =>$this->input->post("interview_alt"),   
                       "interview_url" =>$this->input->post("interview_url"), 
                        "interview_date" =>$this->input->post("interview_date"), 
                   
                        "interview_faculty"  =>$this->input->post("interview_faculty"),
                   
                    // "course_image"  =>$this->input->post("course_image")  
                ); 


           
            if($_FILES['interview_image']['name']!="")

               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('interview_image'))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_interview', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['interview_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_interview_data($data);

        redirect('Welcome/view_interview');
      }
    }
       
                
        $this->load->view('admin/header');
        $this->load->view('admin/view_interview');
        $this->load->view('admin/footer');
    }


   public function update_interview()
     
     { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["interview_data"] = $this->Capitalinfo_model->fetch_single_interview($user_id);  
           $data["interview_list"] = $this->Capitalinfo_model->get_all_interview();
           
          $this->load->view("admin/header");  
          $this->load->view("admin/new_interview",$data);  
           $this->load->view("admin/footer");  
               
       }

      public function updated_interview()  
      {  
           $this->view_interview();  
      }


         public function delete_interview()
        {  
           $id = $this->uri->segment(3);  
         $this->load->model("Capitalinfo_model");  
         $this->Capitalinfo_model->delete_interview($id);  
            redirect(base_url() . "Welcome/deleted_interview");  
        }

        public function deleted_interview()  

       {  
           $this->view_interview();  


       } 

         // ****************************************************Interview part end***************************************

      // ****************************************************address part start***************************************

      
           public function view_address()
  {
    
      
     $this->load->model('Capitalinfo_model');
 $data["address_list"] = $this->Capitalinfo_model->get_all_address();
         $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_address',$data);
         $this->load->view('admin/footer'); 
  
    }


     public function insert_address()
  {

    $this->load->model('Capitalinfo_model');
     if(isset($_POST['update']))
     {
             

  $data = array('main_address'=>$_POST['main_address'],
           'main_phone'=>$_POST['main_phone'],
           'main_email'=>$_POST['main_email'],
           'main_website'=>$_POST['main_website'],

           'branch1_address'=>$_POST['branch1_address'],
           'branch1_phone'=>$_POST['branch1_phone'],
           'branch1_email'=>$_POST['branch1_email'],
           'branch1_website'=>$_POST['branch1_website'],

           'branch2_address'=>$_POST['branch2_address'],
           'branch2_phone'=>$_POST['branch2_phone'],
           'branch2_email'=>$_POST['branch2_email'],
           'branch2_websites'=>$_POST['branch2_websites'],

            'working_time'=>$_POST['working_time'],
            'working_time1'=>$_POST['working_time1'],
           'google_map'=>$_POST['google_map'],
            );

                     $this->Capitalinfo_model->update_address($data, $this->input->post("hidden_id"));  
                  redirect(base_url() . "Welcome/updated_address");  
        } 
      


  //      if (isset($_POST['create']))
  // {
  //       $data = array('page_name'=>$_POST['page_name'],
  //          'title'=>$_POST['title'],
  //          'description'=>$_POST['description'],
  //          'keywords'=>$_POST['keywords']
  //           );
  //           $this->load->model('Capitalinfo_model');
  //            $this->Capitalinfo_model->meta_tag($data);

  //            redirect('Welcome/viewseo'); 


  //   }

   }


      public function update_address()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["address_data"] = $this->Capitalinfo_model->fetch_single_address($user_id);  
           $data["address_list"] = $this->Capitalinfo_model->get_all_address();


           $this->load->view("admin/header");  
         
           $this->load->view("admin/update_address", $data);  
           $this->load->view("admin/footer"); 

     }

      public function updated_address()  

       {  
           $this->view_address();  
       }


 // *******************************************Address part end *************************************************

      // ****************************************************salesforce video part start***************************************


 
           public function view_video()
  {
    
      
    $this->load->model('Capitalinfo_model');
  $data["video_list"] = $this->Capitalinfo_model->get_all_video();
        $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_video',$data);
         $this->load->view('admin/footer'); 
  
  }


      function new_video()
 {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_video');
        $this->load->view('admin/footer');
 }


 public function insert_video()
  {

  $this->load->model('Capitalinfo_model');
     if(isset($_POST['update']))
    {
             

  $data = array('date'=>$_POST['date'],
           
           'topic'=>$_POST['topic'],
           'video_link'=>$_POST['video_link'],
           'materials'=>$_POST['editor1'],
           'course'=>$_POST['course'],
           'batch_type'=>$_POST['batch_type'],
           'batch_schedule'=>$_POST['batch_schedule'],
            );

                     $this->Capitalinfo_model->update_video($data, $this->input->post("hidden_id"));  
                  redirect(base_url() . "Welcome/updated_video");  
     } 
      


       if (isset($_POST['create']))
  {
        $data = array('date'=>$_POST['date'],
           
           'topic'=>$_POST['topic'],
           'video_link'=>$_POST['video_link'],
           'materials'=>$_POST['editor1'],
           'course'=>$_POST['course'],
           'batch_type'=>$_POST['batch_type'],
           'batch_schedule'=>$_POST['batch_schedule'],
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->salesforce_video($data);

             redirect('Welcome/view_video'); 


    }

   }




     public function update_video()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["video_data"] = $this->Capitalinfo_model->fetch_single_video($user_id);  
           $data["video_list"] = $this->Capitalinfo_model->get_all_video();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_video", $data);  
           $this->load->view("admin/footer"); 

     }

      public function updated_video()  

       {  
           $this->view_video();  
       }


         public function delete_video()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_video($id);  
           redirect(base_url() . "Welcome/deleted_video");  
      }

       public function deleted_video()  
      {  
           $this->view_video();  


      } 

      // *******************************************video part end *************************************************

      // ****************************************************footer part start***************************************
   
       public function view_footercapital()
  {
    
      
   $this->load->model('Capitalinfo_model');
  $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
        $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_footer_capital', $data);
         $this->load->view('admin/footer'); 
  
  }


      function new_footercapital()
   {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_footercapital');
        $this->load->view('admin/footer');
  }

 public function insert_footercapital()
  {

   $this->load->model('Capitalinfo_model');
      if(isset($_POST['update']))
    {
             

  $data = array('title_name'=>$_POST['title_name'],
           
           'title_url'=>$_POST['title_url'],
          
            );

                      $this->Capitalinfo_model->update_footer_title($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_footercap");  
      } 
      


       if (isset($_POST['create']))
  {
        $data = array('title_name'=>$_POST['title_name'],
           
           'title_url'=>$_POST['title_url'],
          
          
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->footer_page($data);

             redirect('Welcome/view_footercapital'); 


  }

   }


     public function update_footercap()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["footer_data"] = $this->Capitalinfo_model->fetch_single_footer_title($user_id);  
           $data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_footercapital", $data);  
           $this->load->view("admin/footer"); 

     }

      public function updated_footercap()  

       {  
           $this->view_footercapital();  
       }


     public function delete_footcap()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_footcap($id);  
           redirect(base_url() . "Welcome/deleted_footcap");  
      }

       public function deleted_footcap()  
      {  
           $this->view_footercapital();  


      } 



         public function view_footerpopular()
  {
    
      
    $this->load->model('Capitalinfo_model');
  $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
        $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_footer_popular',$data);
         $this->load->view('admin/footer'); 
  
  }


      function new_footerpopular()
   {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_footer_popular');
        $this->load->view('admin/footer');
  }


   public function insert_footerpopular()
  {

    $this->load->model('Capitalinfo_model');
       if(isset($_POST['update']))
     {
             

   $data = array('footer_popular'=>$_POST['footer_popular'],
           
            'footer_url'=>$_POST['footer_url'],
          
            );

                      $this->Capitalinfo_model->update_footer_popular($data, $this->input->post("hidden_id"));  
                  redirect(base_url() . "Welcome/updated_footerpopular");  
      } 
      


       if (isset($_POST['create']))
  {
        $data = array('footer_popular'=>$_POST['footer_popular'],
           
           'footer_url'=>$_POST['footer_url'],
          
          
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->footer_popular($data);

             redirect('Welcome/view_footerpopular'); 


  }
}
 public function update_footer_popular()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["footer_popular_data"] = $this->Capitalinfo_model->fetch_single_footer_popular($user_id);  
           $data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_footer_popular", $data);  
           $this->load->view("admin/footer"); 

   }

 public function updated_footerpopular()  

       {  
           $this->view_footerpopular();  
       }


      public function delete_footpopular()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_footpopular($id);  
           redirect(base_url() . "Welcome/deleted_footpopular");  
      }

       public function deleted_footpopular()  
      {  
           $this->view_footerpopular();  


      } 


         public function view_footersearch()
  {
    
      
   $this->load->model('Capitalinfo_model');
 $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
        $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_footer_search',$data);
         $this->load->view('admin/footer'); 
  
  }


      function new_footersearch()

   {
    
        $this->load->view('admin/header');
        $this->load->view('admin/new_footer_search');
        $this->load->view('admin/footer');
  }



     public function insert_footersearch()
  {

  $this->load->model('Capitalinfo_model');
        if(isset($_POST['update']))
     {
             

    $data = array('search_title'=>$_POST['search_title'],
           
           'search_url'=>$_POST['search_url'],
          
           );

                    $this->Capitalinfo_model->update_footer_search($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_footersearch");  
      } 
      


       if (isset($_POST['create']))
  {
        $data = array('search_title'=>$_POST['search_title'],
           
           'search_url'=>$_POST['search_url'],
          
          
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->footer_search($data);

             redirect('Welcome/view_footersearch'); 


  }
}


 public function update_footer_search()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["footer_search_data"] = $this->Capitalinfo_model->fetch_single_footer_search($user_id);  
           $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_footer_search", $data);  
           $this->load->view("admin/footer"); 

   }

 public function updated_footersearch()  

       {  
           $this->view_footersearch();  
       }


         public function delete_footsearch()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_footsearch($id);  
           redirect(base_url() . "Welcome/deleted_footsearch");  
      }

       public function deleted_footsearch()  
      {  
           $this->view_footersearch();  


      } 


            public function view_footeraddress()
  {
    
      
    $this->load->model('Capitalinfo_model');
 $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
   $this->load->view('admin/header'); 
    
    $this->load->view('admin/view_footer_address',$data);
     $this->load->view('admin/footer'); 
  
  }


     public function insert_footeraddress()
  {

  $this->load->model('Capitalinfo_model');
        if(isset($_POST['update']))
     {
             

        $data = array('address'=>$_POST['address'],
           
           'phone'=>$_POST['phone'],
           'mail'=>$_POST['mail'],
           'footer_bar'=>$_POST['footer_bar'],
          
           );

                    $this->Capitalinfo_model->update_footer_address($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_footeraddress");  
      } 
      

}


public function update_footer_address()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["footer_address_data"] = $this->Capitalinfo_model->fetch_single_footer_address($user_id);  
           $data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/edit_footer_address", $data);  
           $this->load->view("admin/footer"); 

   }

 public function updated_footeraddress()  

       {  
           $this->view_footeraddress();  
       }

  function myfooter()

   {
    
        $this->load->view('admin/header');
        $this->load->view('admin/myfooter');
        $this->load->view('admin/footer');
  }


      // *******************************************footer part end *************************************************
      
      
      // *********************************Testimonials Part start**********************************

        public function new_testimonials()
  {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_testimonials');
    $this->load->view('admin/footer');
  
  }

         public function view_testimonials()
  {
    $this->load->model('Capitalinfo_model');
   $data["testimonials"] = $this->Capitalinfo_model->all_testimonial();
    $this->load->view('admin/header');  
    $this->load->view('admin/view_testimonials',$data);
    $this->load->view('admin/footer');
  
  }


      public function insert_testimonial()
  {

    $this->load->model('Capitalinfo_model');

     if(isset($_POST['update']))
     {
             

      $data = array('name'=>$_POST['name'],

        'review'=>$_POST['review'],
      
      
           
     );

                 $this->Capitalinfo_model->update_testimonial($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_testimonial");  
    } 
      


       if (isset($_POST['create']))
  {
        $data = array('name'=>$_POST['name'],
          'review'=>$_POST['review'],
           

           
            );
            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->new_testimonials($data);

             redirect('Welcome/view_testimonials'); 


    }
}


   public function update_testimonial()
      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["testimonials_data"] = $this->Capitalinfo_model->fetch_single_testimonials($user_id);  
           $data["testimonials"] = $this->Capitalinfo_model->all_testimonial();
           $this->load->view("admin/header");  
       
           $this->load->view("admin/new_testimonials", $data);  
           $this->load->view("admin/footer"); 

     }

      public function updated_testimonial()  

       {  
           $this->view_testimonials();  
       }
   

  public function delete_testimonial()

     {  
            $id = $this->uri->segment(3);  
            $this->load->model("Capitalinfo_model");  
         $this->Capitalinfo_model->delete_testimonial($id);  
           redirect(base_url() . "Welcome/deleted_testimonial");  
    }  

     public function deleted_testimonial()  
     {  
          $this->view_testimonials();  
     } 


// *********************************Testimonials Part end**********************************


       // *********************************faculty Registration Part start**********************************


         public function view_faculty()
  {
    $this->load->model('Capitalinfo_model');
   $data["faculty"] = $this->Capitalinfo_model->all_faculty();
    $this->load->view('admin/header');  
    $this->load->view('admin/view_faculty',$data);
    $this->load->view('admin/footer');
  
  }
  public function delete_faculty()

     {  
            $id = $this->uri->segment(3);  
            $this->load->model("Capitalinfo_model");  
         $this->Capitalinfo_model->delete_faculty($id);  
           redirect(base_url() . "Welcome/deleted_faculty");  
    }

     public function deleted_faculty()  
     {  
          $this->view_faculty();  
     } 


    // *********************************faculty Registration Part end**********************************
    
     // *********************************Website Logo/favi icon Part Start**********************************
          public function new_logo()
    {
    
    $this->load->view('admin/header');  
    $this->load->view('admin/new_logo');
    $this->load->view('admin/footer');
  
    }
  

        public function view_logo()
  {
     $this->load->model('Capitalinfo_model');
   $data["logo"] = $this->Capitalinfo_model->all_logo();
    $this->load->view('admin/header');  
    $this->load->view('admin/view_logo',$data);
    $this->load->view('admin/footer');
  
  }


 public function insert_logo()

        { 


    $this->load->model('Capitalinfo_model');
     if(isset($_POST['update'])){
             

       $data = array('logo_title'=>$_POST['logo_title']
                    
           
          );

       if($_FILES['logo_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('logo_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_logo', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['logo_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }


     if($_FILES['favi_icon']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('favi_icon')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_logo', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['favi_icon'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];
      }
    }






                     $this->Capitalinfo_model->update_logo($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "Welcome/updated_logo");  
              }


       $data = array(  
                     "logo_title" =>$this->input->post("logo_title"),  
                  
                    // "course_image"  =>$this->input->post("course_image")  
                ); 


           
                   if($_FILES['logo_image']['name']!="")
               {


      $config['upload_path']          = APPPATH. '../assets/uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('logo_image')){
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/new_logo', $error);
      }

      else{

    
            $upload_data = $this->upload->data();

        //get the uploaded file name
        $data['logo_image'] = base_url(). 'assets/uploads/'.$upload_data['file_name'];

        //store pic data to the db
        $this->Capitalinfo_model->store_logo_data($data);

        $this->load->model('Capitalinfo_model');

        redirect('Welcome/view_logo');
      }
    }
       
                
        $this->load->view('footer');
    }



  public function update_logo()
     
       { 

           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["logo_data"] = $this->Capitalinfo_model->fetch_single_logo($user_id);  
           $data["logo"] = $this->Capitalinfo_model->all_logo();
           
          $this->load->view("admin/header");  
          $this->load->view("admin/new_logo",$data);  
           $this->load->view("admin/footer");  
               
       }

      public function updated_logo()  
      {  
           $this->view_logo();  
      }


    // *********************************Website Logo/favi icon Part end**********************************
 
 
 

      // ***********************student part start***************************************
   
  public function view_students()
  {
      $this->load->model('Capitalinfo_model');
     $data["students"] = $this->Capitalinfo_model->all_students();
    $this->load->view('admin/header');
    $this->load->view('admin/students',$data);
      $this->load->view('admin/footer');
  }
  
  public function approve_students($id)
  {
  $data=array('status'=>'active');
  
  $this->db->where('id',$id);
  $this->db->update('student',$data);
  
  $affected_rows=$this->db->affected_rows();

  if ($affected_rows==1){
    $this->db->where('id',$id);
    $new_student=$this->db->get('student')->row_array();
  
    // Get cURL resource
    $curl = curl_init();
    // Set some options
    curl_setopt($curl, CURLOPT_URL, 'https://www.satishmyla.in/admin/student/api_profile_submit/');
    curl_setopt($curl, CURLOPT_FAILONERROR, true);
    curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_POST => 1,
      CURLOPT_POSTFIELDS => array(
        'capital_api' => 1,
        'fname' => $new_student['first_name'],
        'lname' => $new_student['last_name'],
        'email' => $new_student['email_id'],
        'password' => $new_student['password'],
        'contact' => $new_student['contact_no'],
        'address' => $new_student['address'],
        'batch_id' => 0
      )
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    $error_msg = curl_error($curl);
    
    // Close request to clear up some resources
    curl_close($curl);
  }else{
  
  $data2=array('status'=>'inactive');
  
  $this->db->where('id',$id);
  $this->db->update('student',$data2);
  
  }
    redirect('Welcome/view_students');
  }
  
  
  
  
  /****************Start User Dashboard******************/

   

 public function user_dashboard()
  {
      if($this->session->userdata('id') != '')
    {
  $this->load->model('Capitalinfo_model');
    $data["case_list"] = $this->Capitalinfo_model->get_all_case();
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/new_case',$data);
    $this->load->view('userdashboard/footer');


}
else {

    redirect(base_url());
  }
}

  public function new_case()
  {
    if($this->session->userdata('id') != '')
    {
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/new_case');
    $this->load->view('userdashboard/footer');
  
  }
    else {

    redirect(base_url());
  }
  }

   public function insert_case()
  {

   $this->load->model('Capitalinfo_model');

      if(isset($_POST['update']))
    {
       



  $data = array('name'=>$_POST['name'],

    'user_id'=>$_POST['user_id'],
           
                  'mobile'=>$_POST['mobile'],
                 'issue_type'=>$_POST['issue_type'],
                 'issue_description'=>$_POST['issue_description'],
                 
                 'email'=>$_POST['email'],
                     'status'=>$_POST['status'],
                         'closed_by'=>$_POST['closed_by'],
            );

   // print_r($data) ;
  //  echo $this->input->post("hidden_id");
    

            $this->Capitalinfo_model->update_case($data, $this->input->post("hidden_id"));  
             


  $from_email = "capitalinfosol@gmail.com "; 
         
         
        
          $name = $this->input->post('name'); 
           $phone= $this->input->post('mobile'); 
           $email = $this->input->post('email'); 
            $issue = $this->input->post('issue_type');
            $description = $this->input->post('issue_description'); 
              // $myfile = $this->input->post('myfile'); 
           
 $message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Name</th> 
                   <th style='border:1px solid;'>Contact NO</th>
                     <th style='border:1px solid;'>Mail ID</th>
                      <th style='border:1px solid;'>issue</th>
                       <th style='border:1px solid;'>description</th>
                      
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$phone."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$issue."</td><td style='border:1px solid;'>".$description."</td></tr>
                  </table>"; 
                      $to_email = $_POST['email'];   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
         $this->email->from($from_email, 'Capital Info Solutions'); 
         $this->email->to($to_email);
         $this->email->subject('Students Query Solutions(cases)'); 
         $this->email->message("Students Query Solutions ".$message1); 
      
//   echo "hello 1";
//   exit;
         //Send mail 
         $this->email->send(); 


    redirect(base_url() . "Welcome/updated_case");  

      } 
      


       if (isset($_POST['create']))
   {
        $data = array(
'user_id'=>$_POST['user_id'],
          'name'=>$_POST['name'],
           
                  'mobile'=>$_POST['mobile'],
                 'issue_type'=>$_POST['issue_type'],
                 'issue_description'=>$_POST['issue_description'],
                 
                 'email'=>$_POST['email'],
                     'status'=>$_POST['status'],
                         'closed_by'=>$_POST['closed_by'],
               );


            $this->load->model('Capitalinfo_model');
             $this->Capitalinfo_model->new_case($data);


                  $from_email = "capitalinfosol@gmail.com "; 
         
         
        
          $name = $this->input->post('name'); 
           $phone= $this->input->post('mobile'); 
           $email = $this->input->post('email'); 
            $issue = $this->input->post('issue_type');
            $description = $this->input->post('issue_description'); 
              // $myfile = $this->input->post('myfile'); 
           
 $message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Name</th> 
                   <th style='border:1px solid;'>Contact NO</th>
                     <th style='border:1px solid;'>Mail ID</th>
                      <th style='border:1px solid;'>issue</th>
                       <th style='border:1px solid;'>description</th>
                      
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$name."</td><td style='border:1px solid;'>".$phone."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$issue."</td><td style='border:1px solid;'>".$description."</td></tr>
                  </table>"; 
                      $to_email ="capitalinfosol@gmail.com ";   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
         $this->email->from($from_email, 'Capital Info Solutions'); 
         $this->email->to($to_email);
         $this->email->subject('Students Query(cases)'); 
         $this->email->message("Students Query ".$message1); 
      
//   echo "hello 1";
//   exit;
         //Send mail 
         $this->email->send(); 
         
    
       $this->session->set_flashdata('success', 'Query Create Succcess');
             
        redirect('Welcome/view_case'); 
       
           
       
        
    }

             

  
   }
   

   public function view_case()
  {
      if($this->session->userdata('id') != '')
    {
    $this->load->model('Capitalinfo_model');
    $data["case_list"] = $this->Capitalinfo_model->get_all_case();
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/view_case',$data);
    $this->load->view('userdashboard/footer');

  }
  else {

    redirect(base_url());
  }
  }

   public function view_caseadmin()
  {

    $user_id = $_GET['user_id'];
    $this->load->model('Capitalinfo_model');
    $data["case_list"] = $this->Capitalinfo_model->get_all_case_admin($user_id);
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/view_caseadmin',$data);
    $this->load->view('userdashboard/footer');

  }


   public function update_case()

      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["case_data"] = $this->Capitalinfo_model->fetch_single_case($user_id);  
           $data["case_list"] = $this->Capitalinfo_model->get_all_case();
           $this->load->view("userdashboard/header");  
       
           $this->load->view("userdashboard/new_case", $data);  
           $this->load->view("userdashboard/footer"); 

     }

      public function updated_case()  

       {  
           $this->view_user();  
       }

   public function delete_case()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_case($id);  
           redirect(base_url() . "Welcome/deleted_case");  
      }

       public function deleted_case()  
      {  
           $this->view_case();  


      } 

  // **************start user *******
  
    public function new_user()
  {
      
       if($this->session->userdata('id') != '')
    {
    
    
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/new_user');
    $this->load->view('userdashboard/footer');
  
  }
   else {  
  
    redirect(base_url());
  }
  }


   
   
   
     public function insert_user()
  {

   $this->load->model('Capitalinfo_model');

      if(isset($_POST['update']))
    {
             

                 $data = array('user_type'=>$_POST['user_type'],
           
                  'fisrt_name'=>$_POST['fisrt_name'],
                  'last_name'=>$_POST['last_name'],
                 'user_name'=>$_POST['user_name'],
                 'passwod'=>$_POST['passwod'],
                  'phone'=>$_POST['phone'],
                 'email'=>$_POST['email'],
                 'batch_no'=>$_POST['batch_no'],
          
            );

            $this->Capitalinfo_model->update_user($data, $this->input->post("hidden_id")); 
            
             $from_email = "capitalinfosol@gmail.com "; 
         
      
        
          $fisrt_name = $this->input->post('fisrt_name'); 
           $last_name= $this->input->post('last_name'); 
           $user_name = $this->input->post('user_name'); 
            $passwod = $this->input->post('passwod');
            $phone = $this->input->post('phone'); 
               $email = $this->input->post('email'); 
                  $batch_no = $this->input->post('batch_no'); 

           
 $message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Fisrt Name</th> 
                   <th style='border:1px solid;'>Last Name</th>
                     <th style='border:1px solid;'>User Name</th>
                      <th style='border:1px solid;'>Password</th>
                       <th style='border:1px solid;'>Phone</th>
                          <th style='border:1px solid;'>Email</th>
                            <th style='border:1px solid;'>Batch</th>
                      
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$fisrt_name."</td><td style='border:1px solid;'>".$last_name."</td><td style='border:1px solid;'>".$user_name."</td><td style='border:1px solid;'>".$passwod."</td><td style='border:1px solid;'>".$phone."</td>  <td style='border:1px solid;'>".$email."</td>  <td style='border:1px solid;'>".$batch_no."</td></tr>
                  </table>"; 
                      $to_email ="capitalinfosol@gmail.com ";   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
          $this->email->from($from_email, 'Capital Info Solutions'); 
         $this->email->to($to_email);
         $this->email->subject('Update Student Registration (Capital info solutions login)'); 
         $this->email->message("Update Student Registration(Capital info solutions login) ".$message1); 
      
//   echo "hello 1";
//   exit;
         //Send mail 
         $this->email->send(); 
                 redirect(base_url() . "Welcome/updated_user");  
      } 
      




        if (isset($_POST['create']))
   {
        $data = array('user_type'=>$_POST['user_type'],
           
                  'fisrt_name'=>$_POST['fisrt_name'],
                  'last_name'=>$_POST['last_name'],
                 'user_name'=>$_POST['user_name'],
                 'passwod'=>$_POST['passwod'],
                  'phone'=>$_POST['phone'],
                 'email'=>$_POST['email'],
                 'batch_no'=>$_POST['batch_no'],
                 'status'=>$_POST['status'],
          
          
            );
            $this->load->model('Capitalinfo_model');
          $id =    $this->Capitalinfo_model->new_user($data);


                        $session_data = array(
                        'user_name' => $_POST['user_name'],


                        'id' => $id,
                         'user_type' =>$_POST['user_type'],
                         'phone' =>$_POST['phone'],
                          'email' =>$_POST['email'],
                          'batch_no' =>$_POST['batch_no'],
                        );

                    $_SESSION['user_name'] =  $data['user_name'];
                    $_SESSION['id'] = $id;
                    $_SESSION['user_type'] = $data['user_type'];
                    $_SESSION['phone'] = $data['phone'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['batch_no'] = $data['batch_no'];
                    $_SESSION['logged_in'] = TRUE;
                   
                    // Add user data in session
                    $this->session->set_userdata('logged_in',$session_data);
                    // echo 'success' ;
                    //  exit;


                     $from_email = "capitalinfosol@gmail.com "; 
         
      
        
          $fisrt_name = $this->input->post('fisrt_name'); 
           $last_name= $this->input->post('last_name'); 
           $user_name = $this->input->post('user_name'); 
            $passwod = $this->input->post('passwod');
            $phone = $this->input->post('phone'); 
               $email = $this->input->post('email'); 
                  $batch_no = $this->input->post('batch_no'); 

           
 $message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Fisrt Name</th> 
                   <th style='border:1px solid;'>Last Name</th>
                     <th style='border:1px solid;'>User Name</th>
                      <th style='border:1px solid;'>Password</th>
                       <th style='border:1px solid;'>Phone</th>
                          <th style='border:1px solid;'>Email</th>
                            <th style='border:1px solid;'>Batch</th>
                      
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>".$fisrt_name."</td><td style='border:1px solid;'>".$last_name."</td><td style='border:1px solid;'>".$user_name."</td><td style='border:1px solid;'>".$passwod."</td><td style='border:1px solid;'>".$phone."</td>  <td style='border:1px solid;'>".$email."</td>  <td style='border:1px solid;'>".$batch_no."</td></tr>
                  </table>"; 
                      $to_email ="capitalinfosol@gmail.com ";   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
         $this->email->from($from_email, 'Capital Info Solutions'); 
         $this->email->to($to_email);
         $this->email->subject('Student Registration(Capital info solutions login)'); 
         $this->email->message("Student Registration(Capital info solutions login) ".$message1); 
      
//   echo "hello 1";
//   exit;
         //Send mail 
         $this->email->send(); 
         
        // $this->session->set_flashdata('email_sent',"Query Registration Successfully");
        // redirect('Welcome/view_case'); 
       
             
                     $this->session->set_flashdata('success', 'Account Create Succcess');
             

             redirect(base_url());


   }

   }
   
   
      public function insert_useradmin()
  {

   $this->load->model('Capitalinfo_model');

      if(isset($_POST['update']))
    {
             

  $data = array('user_type'=>$_POST['user_type'],
           
                  'fisrt_name'=>$_POST['fisrt_name'],
                  'last_name'=>$_POST['last_name'],
                 'user_name'=>$_POST['user_name'],
                 'passwod'=>$_POST['passwod'],
                  'phone'=>$_POST['phone'],
                 'email'=>$_POST['email'],
                 'batch_no'=>$_POST['batch_no'],
          
            );

            $this->Capitalinfo_model->update_user($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_user");  
      } 
      


      if (isset($_POST['create']))
   {
        $data = array('user_type'=>$_POST['user_type'],
           
                  'fisrt_name'=>$_POST['fisrt_name'],
                  'last_name'=>$_POST['last_name'],
                 'user_name'=>$_POST['user_name'],
                 'passwod'=>$_POST['passwod'],
                  'phone'=>$_POST['phone'],
                 'email'=>$_POST['email'],
                 'batch_no'=>$_POST['batch_no'],
                 'status'=>$_POST['status'],
          
          
            );
            $this->load->model('Capitalinfo_model');
          $id =    $this->Capitalinfo_model->new_useradmin($data);


                      

             redirect('Welcome/view_user'); 


   }

   }


 public function update_user()

      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["user_data"] = $this->Capitalinfo_model->fetch_single_user($user_id);  
           $data["user_list"] = $this->Capitalinfo_model->get_all_user();
           $this->load->view("userdashboard/header");  
       
           $this->load->view("userdashboard/new_user", $data);  
           $this->load->view("userdashboard/footer"); 

     }

      public function updated_user()  

       {  
           $this->view_user();  
       }


     public function delete_user()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_user($id);  
           redirect(base_url() . "Welcome/deleted_user");  
      }

       public function deleted_user()  
      {  
           $this->view_user();  


      } 

      

   public function view_user()
  {
    
   if($this->session->userdata('id') != '')
    {
  
    $this->load->model('Capitalinfo_model');
    $data["user_list"] = $this->Capitalinfo_model->get_all_user();
    $this->load->view('userdashboard/header');  
    
    $this->load->view('userdashboard/view_user',$data);
    $this->load->view('userdashboard/footer'); 
  }
   else {

    redirect(base_url());
  }
  }

  // ************************end user *****************************


  // ***********************start user role*****************************

    public function new_userrole()
  {
    
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/new_userrole');
    $this->load->view('userdashboard/footer');
  
  }

    public function insert_userrole()
  {

   $this->load->model('Capitalinfo_model');

      if(isset($_POST['update']))
    {
             

  $data = array(
           
                  'name'=>$_POST['name'],
                  
                  'phone'=>$_POST['phone'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
          
            );

            $this->Capitalinfo_model->update_userrole($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_userrole");  
      } 
      


       if (isset($_POST['create']))
   {
        $data = array('name'=>$_POST['name'],
           
                'phone'=>$_POST['phone'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                
          
          
            );
            $this->load->model('Capitalinfo_model');
            $this->Capitalinfo_model->new_userrole($data);

             redirect('Welcome/view_userrole'); 


   }

   }

   public function update_userrole()

      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $data["userrole_data"] = $this->Capitalinfo_model->fetch_single_userrole($user_id);  
           $data["userrole_list"] = $this->Capitalinfo_model->get_all_admin();
           $this->load->view("userdashboard/header");  
       
           $this->load->view("userdashboard/new_userrole", $data);  
           $this->load->view("userdashboard/footer"); 

     }

      public function updated_userrole()  

       {  
           $this->view_userrole();  
       }


    public function delete_userrole()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_userrole($id);  
           redirect(base_url() . "Welcome/deleted_userrole");  
      }

       public function deleted_userrole()  
      {  
           $this->view_userrole();  


      } 


  

     public function view_userrole()
  {
    $this->load->model('Capitalinfo_model');
    $data["admin_list"] = $this->Capitalinfo_model->get_all_admin();
    
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/view_userrole',$data);
    $this->load->view('userdashboard/footer');
  
  }
  
// ***********************end user role*****************************

// ***********************schedule start******************

     public function new_schedule()
  {
      if($this->session->userdata('id') != '')
    {
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/new_schedule');
    $this->load->view('userdashboard/footer');
  
  }
  
  else {

    redirect(base_url());
  }
  }


    public function insert_schedule()

  {

   $this->load->model('Capitalinfo_model');

      if(isset($_POST['update']))
    {
             

  $data = array(
           
                  'batch_no'=>$_POST['batch_no'],
           
                'time'=>$_POST['time'],
                // 'schedule_doc'=>$_POST['schedule_doc'],
                'username'=>$_POST['username'],
                'password'=>$_POST['password'],
                'email'=>$_POST['email'],
             
          
            );

            $this->Capitalinfo_model->update_schedule($data, $this->input->post("hidden_id"));  
                 redirect(base_url() . "Welcome/updated_schedule");  
      } 
      


       if (isset($_POST['create']))
   {
        $data = array(
                'user_id'=>$_POST['user_id'],

                'batch_no'=>$_POST['batch_no'],
           
                'time'=>$_POST['time'],
                // 'schedule_doc'=>$_POST['schedule_doc'],
                'username'=>$_POST['username'],
                'password'=>$_POST['password'],
                 'email'=>$_POST['email']
             
            );
            $this->load->model('Capitalinfo_model');
            $this->Capitalinfo_model->new_schedule($data);

             
                  $from_email = "capitalinfosol@gmail.com "; 
         
         
        
          $batch_no = $this->input->post('batch_no'); 
           $time= $this->input->post('time'); 
           $email = $this->input->post('email'); 
            $username = $this->input->post('username');
        
              // $myfile = $this->input->post('myfile'); 
           
 $message1 = "<table style='border:1px solid;'>

                  <tr style='border:1px solid;'>
                  <th style='border:1px solid;'>Batch No</th> 
                   <th style='border:1px solid;'>Time</th>
                     <th style='border:1px solid;'>Mail ID</th>
                      <th style='border:1px solid;'>UserName</th> 
                    
                      
                  </tr>

                  <tr style='border:1px solid;'><td style='border:1px solid;'>". $batch_no."</td><td style='border:1px solid;'>".$time."</td><td style='border:1px solid;'>".$email."</td><td style='border:1px solid;'>".$username."</td></tr>
                  </table>"; 
                      $to_email ="capitalinfosol@gmail.com ";   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
         $this->email->from($from_email, 'Capital Info Solutions'); 
         $this->email->to($to_email);
         $this->email->subject('Schedule Time'); 
         $this->email->message("Schedule Time? ".$message1); 
      
//   echo "hello 1";
//   exit;
         //Send mail 
         $this->email->send(); 
         
        $this->session->set_flashdata('email_sent',"Schedule Time  Registration Successfully");
        redirect('Welcome/view_schedule'); 
       
           
       
        
    }  

             

  
   }
   public function update_schedule()

      {  
 
           $user_id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
     $data["schedule_data"] = $this->Capitalinfo_model->fetch_single_schedule($user_id);  
           $data["schedule_list"] = $this->Capitalinfo_model->get_all_schedule();
           $this->load->view("userdashboard/header");  
       
           $this->load->view("userdashboard/new_schedule", $data);  
           $this->load->view("userdashboard/footer");


     }

      public function updated_schedule()  

       {  
           $this->view_user();    
         }  


    public function delete_schedule()
        {  
           $id = $this->uri->segment(3);  
           $this->load->model("Capitalinfo_model");  
           $this->Capitalinfo_model->delete_schedule($id);  
           redirect(base_url() . "Welcome/deleted_schedule");  
      }

       public function deleted_schedule()  
      {  
           $this->view_schedule();  


      } 

     public function view_schedule()
  {
      
       if($this->session->userdata('id') != '')
    {
    $this->load->model('Capitalinfo_model');
    $data["schedule_list"] = $this->Capitalinfo_model->get_all_schedule();
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/view_schedule',$data);
    $this->load->view('userdashboard/footer');
  
  }
  
   else {

    redirect(base_url());
  }
  }


   public function view_scheduleadmin()
  {
         
       if($this->session->userdata('id') != '')
    {

    $user_id = $_GET['user_id'];
    $this->load->model('Capitalinfo_model');
    $data["schedule_list"] = $this->Capitalinfo_model->get_all_schedule_admin($user_id);
    $this->load->view('userdashboard/header');  
    $this->load->view('userdashboard/view_scheduleadmin',$data);
    $this->load->view('userdashboard/footer');

  }
  
  else {

    redirect(base_url());
  }
  }

    // ************************schedule end*********************


 // Check for user login process
public function ajaxlogin()
{

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Capitalinfo_model');
        session_start();
       
       $data['passwod'] = $this->input->post('password');
         $data['user_name'] = $this->input->post('username');

                $this->load->model('capitalinfo_model');
              
                $data = $this->capitalinfo_model->get_admin_details($data);  
               
                if($data['status'] == TRUE)
                  
                {
                        $session_data = array(
                        'user_name' => $data['user_name'],


                        'id' => $data['id'],
                         'user_type' =>$data['user_type'],
                         'phone' =>$data['phone'],
                          'email' =>$data['email'],
                          'batch_no' =>$data['batch_no'],
                        );

                    $_SESSION['user_name'] =  $data['user_name'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['user_type'] = $data['user_type'];
                    $_SESSION['phone'] = $data['phone'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['batch_no'] = $data['batch_no'];
                    $_SESSION['logged_in'] = TRUE;
                   
                    // Add user data in session
                    $this->session->set_userdata('logged_in',$session_data);
                    echo 'success' ;
                     exit;
              }
                
            else
                {

                 echo 'fail' ;
                  exit;
                }  

    }




     public function logout_user()
      {
        $this->load->library('session');
        $sess_array = array(
            'username' => '',
            'id' => '',
        );
        $this->session->unset_userdata('logged_in', $sess_array);
          session_destroy();
        redirect(base_url().'');
           // redirect("index.php/Welcome");  
     }

        
         public function mymethod()
  {
   

     $status = $_GET['status'];
     $email = $_GET['email'];
     $password = $_GET['password'];


     
     $user_id = $_GET['user_id'];
     $data = array('status'=> $status);
     $this->load->model('capitalinfo_model');
     $data = $this->capitalinfo_model->update_status($data, $user_id); 
    if($data)   
{

  echo "success";   
  

  $from_email = "capitalinfosol@gmail.com ";  
         
         
        
        
              // $myfile = $this->input->post('myfile'); 
           
   if($status == 'Active') {
 $message1 = " Your Account has been activated <br> please login with <br> user id:- ".$user_id." <br>  password 
     :-".$password; 
   }
   else {
      $message1 = " Your Account has been deactivated please contact with admin ";

   }
                      $to_email = $email;   
         
         
   
         //Load email library 
         $this->load->library('email'); 
         $this->email->set_mailtype("html");  
   
         $this->email->from($from_email, 'Capital Info Solutions Account'); 
         $this->email->to($to_email);
         $this->email->subject('Capital info Solutions Account '); 
         $this->email->message("  ".$message1); 
      
//   echo "hello 1";
//   exit;
         //Send mail 
         $this->email->send(); 
         

}

else {

    echo "fail" ;
}

    
  }
  
   function filename_exists()
{
    $username = $this->input->post('username');

   
    $exists = $this->Capitalinfo_model->filename_exists($username);

    $count = count($exists);
    // echo $count 
   

        if ($count == 1 ) {
        return true;
    } else {
        return false;
    }
}


  

  
}
  

