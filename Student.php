<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Student extends CI_Controller {
		
		Public function __construct() {   
		
			
			parent::__construct();
			$this->load->database();
		
			   $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
          $this->load->library('form_validation');
		}
		
		Public function index()
		{
			$this->load->model('Capitalinfo_model','',TRUE);
			 $data["metadata"] = $this->Capitalinfo_model->get_metadata("student");
			
			$data["demo"]= $this->Capitalinfo_model->view_alldemo();   
			  $data["logo"] = $this->Capitalinfo_model->all_logo();
			$data["setting_list"] = $this->Capitalinfo_model->get_all_setting();
			$data["picture_list"] = $this->Capitalinfo_model->get_all_pics();
			$data["footer_title"] = $this->Capitalinfo_model->get_all_title_list();
			$data["footer_popular"] = $this->Capitalinfo_model->get_all_popular_list();
            $data["footer_search"] = $this->Capitalinfo_model->get_all_search_list();
			$data["footer_address"] = $this->Capitalinfo_model->get_all_address_list();  
			
			$this->load->view('header',$data);
			$this->load->view('register');
			$this->load->view('footer',$data); 
		}
		Public function savestudent()
		{
			$fname = $this->input->post("first_name");
			$lname = $this->input->post("last_name");
			$email_id = $this->input->post("email_id");
			$password = $this->input->post("password");
			$contact_no = $this->input->post("contact_no");
			$address = $this->input->post("address");
			
			if($fname!=''){
				if($lname!=''){
					if($email_id!=''){
						if($password!=''){
							#echo $email_id;exit;
							$this->db->where("email_id", $email_id);
							$sql = $this->db->get("student");
							$rows = $sql->num_rows();
							if($rows>0){
								//$this->session->set_flashdata("msg", "<font style='color:red'>Student With this email already exists.</font>");
								//redirect("student");
								echo "<script>
									alert('Student With this email ".$email_id." already exists..');
									window.location.href='".base_url()."student';
									</script>";
							}
							else{
								$data = array(
								"first_name" => $fname,
								"last_name" => $lname,
								"email_id" => $email_id,
								"password" => $password,
								"contact_no" => $contact_no,
								"address" => $address,
								"created_datetime" => date("Y-m-d H:i:s")
								);
								$this->db->insert("student", $data);
								$affected_rows = $this->db->affected_rows();
								if($affected_rows==1){
									
									echo "<script>
									alert('Registered successfully.');
									window.location.href='".base_url()."student';
									</script>";
								}
								else{
									
									echo "<script>
									alert('Registration Failed. Try Again.');
									window.location.href='".base_url()."student';
									</script>";
								}
							}
						}
						else{
							echo "<script>
							alert('Password is empty checkonce.');
							window.location.href='".base_url()."student';
							</script>";
						}
					}
					else{
						echo "<script>
						alert('Email is empty checkonce.');
						window.location.href='".base_url()."student';
						</script>";
					}
				}
				else{
					echo "<script>
					alert('Last Name is empty checkonce.');
					window.location.href='".base_url()."student';
					</script>";
				}
			}
			else{
				echo "<script>
				alert('First Name is empty checkonce.');
				window.location.href='".base_url()."student';
				</script>";
			}
		}
	}	