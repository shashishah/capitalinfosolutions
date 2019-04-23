<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capitalinfo_model extends CI_Model 
{
   
  public function student_register($data)
     {
        
      $this->load->database();
      $query = $this->db->query("select * from registered_students where phone_no=\"$data[phone_no]\"");
      $row = $query->row();

      if (isset($row))
      {
        
        return 0;  
      }
      else
      {
        $this->db->insert('registered_students',$data);
        return 1;
      }
     }
     public function faculty_register($data)
     {
        
      $this->load->database();
      $query = $this->db->query("select * from registered_faculty  where phone_no=\"$data[phone_no]\"");
      $row = $query->row();

      if (isset($row))
      {
        
        return 0;
      }
      else 
      {
        $this->db->insert('registered_faculty',$data);
        return 1;
      }
     }
   function get_batches()  
    {
        $this->load->database();
    $batch= array();
        return $this->db->query("select batches.*,courses.c_name as course_name,courses.url as course_url,faculty.f_name as faculty_name from batches,courses,faculty where batches.course_id=courses.id and batches.faculty_id = faculty.id")->result();
    }
    
    function get_courses()
    {
        $this->load->database();
    $batch= array();
        
        return $this->db->select('*')->from('courses')->get()->result();
    }
    
    function get_faculty()
    {
        $this->load->database();
    $batch= array();
        
        return $this->db->select('*')->from('faculty')->get()->result();
    }
    
     function get_batchtypes()
    {
        $this->load->database();
    $batch= array();
        
        return $this->db->select('*')->from('batches_type')->get()->result();
    }
    
    
   



           Public function new_batch($data)
         {
          $query=$this->db->insert('batches',$data);
          }


     function get_all_batch()
     {


    $all_batch = $this->db->get('batches');
       $this->db->order_by("batch_id", "asc");
    
     return $all_batch->result();

     }
     
    
    
    
    public function get_batchdetails()
    
{
    $this->db->from($this->batches);
    $this->db->order_by("batch_id", "asc");
    $this->db->select('*');
    $this->db->from('batches a'); 
    $this->db->join('courses b', 'b.id=a.course_id', 'left');
    $this->db->join('faculty c', 'c.id=a.faculty_id', 'left');
     $this->db->join('batches_type d', 'd.id=a.type_id', 'left');
  //  $this->db->where('c.album_id',$id);
  //  $this->db->order_by('c.track_title','asc');         
    $query = $this->db->get(); 
    if($query->num_rows() != 0)
    {
        
       
        return $query->result_array();
    }
    else
    {
        
        
        return false;
    }
}
     

      function fetch_single_batch($id)  

      { 
           $this->db->where("batch_id", $id);  
           $query = $this->db->get("batches");  
           return $query->result();  
          
      }   

       function update_batch($data, $id)  
        {  
        
   
           $this->db->where("batch_id", $id);  
        
           $this->db->update("batches", $data);  
          
         } 
  

      function delete_batch($id)
     {  
           $this->db->where("batch_id", $id);  
           $this->db->delete("batches");  
           //DELETE FROM tbl_user WHERE id = $id  
    }
    // *******************seo admin start*******************************

  
    public function get_metadata($page_name)
    {
        $query = $this->db->get_where('metadata', array('page_name' => $page_name));
       // $query =  $this->db->query('SELECT * FROM metadata where page_name= "home"');
        
        $r=null;
              foreach ($query->result() as $row)
              {
                $r['title']= $row->title;
                  $r['description']= $row->description;  
                  $r['keywords']= $row->keywords;
                   $r['canonical']= $row->canonical;
                   
                 $r['og_title']= $row->og_title;
                 $r['og_desc']= $row->og_desc;
                 $r['og_key']= $row->og_key;
                 $r['og_url']= $row->og_url;
                 $r['og_imageurl']= $row->og_imageurl;
                 
                  
              }
            return $r;
    }

         Public function meta_tag($data)
   {
    $query=$this->db->insert('metadata',$data);
   }




     public function view_allseo()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('metadata');  
         return $query;  
      }

         function fetch_single_data($id)  
       {  
           $this->db->where("id", $id);  
           $query = $this->db->get("metadata");  
           return $query;  
          
      } 


      function update_data($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("metadata", $data);  
          
      } 


   function delete_data($id)
     {  
           $this->db->where("id", $id);  
           $this->db->delete("metadata");  
           //DELETE FROM tbl_user WHERE id = $id  
    }


    // *************************************Demo part***************************************************

      public function view_alldemo()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('latestnews');  
         return $query;  
      }

          Public function new_demo($data)
         {
         $query=$this->db->insert('latestnews',$data);
         }


             function fetch_single_demo($id)  
       {  
           $this->db->where("id", $id);  
           $query = $this->db->get("latestnews");  
           return $query;  
          
      } 


      function update_demo($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("latestnews", $data);  
          
      } 


        function delete_demo($id)
     {  
           $this->db->where("id", $id);  
           $this->db->delete("latestnews");  
           //DELETE FROM tbl_user WHERE id = $id  
    }
    
    
    
    // ***************Popup Demo part start********************

      public function view_allpopupdemo()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('popup_demo');  
         return $query;  
      }

          Public function new_popupdemo($data)
         {
         $query=$this->db->insert('popup_demo',$data);
         }


             function fetch_single_popupdemo($id)  
      {  
          $this->db->where("id", $id);  
          $query = $this->db->get("popup_demo");  
          return $query;  
          
      } 


      function update_popupdemo($data, $id)  
      {  
          $this->db->where("id", $id);  
          $this->db->update("popup_demo", $data);  
          
      } 


        function delete_popupdemo($id)
     {  
          $this->db->where("id", $id);  
          $this->db->delete("popup_demo");  
          //DELETE FROM tbl_user WHERE id = $id  
    }
    
    
      // *******************Popup Demo part end****************
    

// *************************************social address settings*************************************

       function get_all_setting()
     {

     $query = $this->db->get('addrees_setting');  
         return $query;  
     }

         function fetch_single_setting($id)  
       {  
           $this->db->where("id", $id);  
           $query = $this->db->get("addrees_setting");  
           return $query;  
          
      } 


      function update_setting($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("addrees_setting", $data);  
          
      } 

      // ************************************************social media/mobile address end*************************
// **************************************Banner part start***************************************


function store_pic_data($data){
     $insert_data['pic_title'] = $data['pic_title'];
    // $insert_data['pic_desc'] = $data['pic_desc'];
    $insert_data['pic_file'] = $data['pic_file'];

    $query = $this->db->insert('slider', $insert_data);
  }

   function get_all_pics()
 {
    
        $query = $this->db->get('slider');  
         return $query;  
  }

      function fetch_single_banner($id) 

       {  
           $this->db->where("id", $id);  
           $query = $this->db->get("slider");  
           return $query;  
          
       } 


      function update_banner($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("slider", $data);  
          
      } 


      function delete_banner($id)
     {  
           $this->db->where("id", $id);  
           $this->db->delete("slider");  
           //DELETE FROM tbl_user WHERE id = $id  
    }

// *******************************************banner part end *************************************************


    // **************************************popup part start***************************************


function store_popup_data($data)

{
          
    $insert_data['pic_file'] = $data['pic_file'];

    $query = $this->db->insert('popup', $insert_data);
  }



   function get_all_popup()
 {
    
        $query = $this->db->get('popup');  
         return $query;  
  }

      function fetch_single_popup($id) 

       {  
           $this->db->where("id", $id);  
           $query = $this->db->get("popup");  
           return $query;  
          
       } 


      function update_popup($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("popup", $data);  
          
      } 




// ******************************************popup  part end *************************************************

      // ****************************************************courses part start***************************************



 function store_course_data($data)
     {

   
     $insert_data['c_name'] = $data['c_name'];
     $insert_data['alt_tag'] = $data['alt_tag'];
    $insert_data['course_image'] = $data['course_image'];
    $insert_data['url'] = $data['url'];

    $query = $this->db->insert('courses', $insert_data);
  }


       function get_all_courses()
 {
    
        $query = $this->db->get('courses');  
         return $query;  
  }

    function fetch_single_course($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("courses");  
           return $query->result();  
          
      } 

        function update_course($data, $id)  
        {  
           $this->db->where("id", $id);  
           $this->db->update("courses", $data);  
          
         } 


   function delete_course($id)
     {  
           $this->db->where("id", $id);  
           $this->db->delete("courses");  
           //DELETE FROM tbl_user WHERE id = $id  
    }

    // *******************************************courses part end *************************************************

      // ****************************************************services part start***************************************


 
      function get_all_services()
 {
    
        $query = $this->db->get('services');  
         return $query;  
  }


 function store_service_data($data)
     {

   
     $insert_data['s_name'] = $data['s_name'];
    
    $insert_data['service_image'] = $data['service_image'];
     $insert_data['content'] = $data['content'];
    $insert_data['service_url'] = $data['service_url'];

    $query = $this->db->insert('services', $insert_data);
  }


    function fetch_single_services($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("services");  
           return $query->result();  
          
      } 

        function update_services($data, $id)  
        {  
           $this->db->where("id", $id);  
           $this->db->update("services", $data);  
          
         } 

          function delete_services($id)
     {  
           $this->db->where("id", $id);  
           $this->db->delete("services");  
           //DELETE FROM tbl_user WHERE id = $id  
    }


    // *******************************************service part end *************************************************

      // ****************************************************Blog part start***************************************


     
      function get_all_blog()
 {
     $this->db->order_by("id", "desc");
        $query = $this->db->get('blog');  
         return $query;  
  }

  function store_blog_data($data)
     {
    
   
     $insert_data['blog_name'] = $data['blog_name'];
      $insert_data['blog_date'] = $data['blog_date'];
    
    $insert_data['blog_image'] = $data['blog_image'];
     $insert_data['blog_content'] = $data['blog_content'];
      $insert_data['alt_tag'] = $data['alt_tag'];
    $insert_data['blog_url'] = $data['blog_url'];
     $insert_data['blog_inner'] = $data['blog_inner'];

    $query = $this->db->insert('blog', $insert_data);
  }


    function fetch_single_blog($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("blog");  
           return $query->result();  
          
      } 

 function update_blog($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("blog", $data);  
          
         } 

          function delete_blog($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("blog");  
           //DELETE FROM tbl_user WHERE id = $id  
         }


    // *******************************************blog part end *************************************************
    
    
     // ****************************************************Interview part start***************************************


     
       function get_all_interview()
  {
      $this->db->order_by("id", "desc");
        $query = $this->db->get('interview_questions');  
          return $query;  
 }

  function store_interview_data($data)
     {
    
   
     $insert_data['interview_name'] = $data['interview_name'];
      $insert_data['interview_image'] = $data['interview_image'];
    
    $insert_data['interview_alt'] = $data['interview_alt'];
    
     $insert_data['interview_url'] = $data['interview_url'];
    $insert_data['interview_date'] = $data['interview_date'];
     $insert_data['interview_faculty'] = $data['interview_faculty'];

    $query = $this->db->insert('interview_questions', $insert_data);
  }


    function fetch_single_interview($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("interview_questions");  
           return $query->result();  
          
      } 

 function update_interview($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("interview_questions", $data);  
          
         } 

         function delete_interview($id)
        {  
            $this->db->where("id", $id);  
           $this->db->delete("interview_questions");  
            //DELETE FROM tbl_user WHERE id = $id  
         }


    // *****************************************Interview part end *************************************************

      // ****************************************************address part start***************************************


     
      function get_all_address()
 {
    
        $query = $this->db->get('address');  
         return $query;  
  }


    function fetch_single_address($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("address");  
           return $query->result();  
          
      } 

 function update_address($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("address", $data);  
          
         } 

             // *******************************************address part end *************************************************

      // ****************************************************salesforce videopart start***************************************


    Public function salesforce_video($data)
   {
    $query=$this->db->insert('salesforce_video',$data);
   }

     function get_all_video()
 {
    
        $query = $this->db->get('salesforce_video');  
         return $query;  
  }

    function fetch_single_video($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("salesforce_video");  
           return $query->result();  
          
      } 

 function update_video($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("salesforce_video", $data);  
          
         } 

           function delete_video($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("salesforce_video");  
           //DELETE FROM tbl_user WHERE id = $id  
         }


             // *******************************************video end *************************************************

      // ****************************************************footer start***************************************


  Public function footer_page($data)
   {
    $query=$this->db->insert('footer_capitalinfo',$data);
   }

       function get_all_title_list()
 {
    
        $query = $this->db->get('footer_capitalinfo');  
         return $query;  

  }

    function fetch_single_footer_title($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("footer_capitalinfo");  
           return $query->result();  
          
      } 

 function update_footer_title($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("footer_capitalinfo", $data);  
          
         } 

    function delete_footcap($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("footer_capitalinfo");  
           //DELETE FROM tbl_user WHERE id = $id  
         }



  Public function footer_popular($data)
   {
    $query=$this->db->insert('footer_popularlink',$data);
   }


function get_all_popular_list()
 {
    
        $query = $this->db->get('footer_popularlink');  
         return $query;  

  }


  function fetch_single_footer_popular($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("footer_popularlink");  
           return $query->result();  
          
       } 

 function update_footer_popular($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("footer_popularlink", $data);  
          
         } 

          function delete_footpopular($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("footer_popularlink");  
           //DELETE FROM tbl_user WHERE id = $id  
         }

         Public function footer_search($data)
     {
    $query=$this->db->insert('footer_search',$data);
     }


     function get_all_search_list()
 {
    
        $query = $this->db->get('footer_search');  
         return $query;  

  }

    function fetch_single_footer_search($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("footer_search");  
           return $query->result();  
          
       } 

 function update_footer_search($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("footer_search", $data);  
          
         } 

           function delete_footsearch($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("footer_search");  
           //DELETE FROM tbl_user WHERE id = $id  
         }



     function get_all_address_list()
 {
    
        $query = $this->db->get('footer_address');  
         return $query;  

  }

   function fetch_single_footer_address($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("footer_address");  
           return $query->result();  
          
       } 

 function update_footer_address($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("footer_address", $data);  
          
         } 
          
         // **************************************************footer end**************************************
         
         
         // **************************************************Testimonials start**************************************


 Public function new_testimonials($data)

   {

    $query=$this->db->insert('testimonials',$data);

   }



     function all_testimonial()
 {
      $this->db->order_by("id", "desc");
        $query = $this->db->get('testimonials');  
         return $query;  

  }

    function fetch_single_testimonials($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("testimonials");  
           return $query->result();  
          
       } 

 function update_testimonial($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("testimonials", $data);  
          
         }

             function delete_testimonial($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("testimonials");  
           //DELETE FROM tbl_user WHERE id = $id  
         } 

 // **************************************************Testimonials part end**************************************
 
  // **************************************************Faculty Registration part start**************************************
  Public function insert_facultyregister($data)

   {

    $query=$this->db->insert('faculty_register',$data);

   }

     function all_faculty()
 {
    
        $query = $this->db->get('faculty_register');  
         return $query;  

  }


      function delete_faculty($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("faculty_register");  
           //DELETE FROM tbl_user WHERE id = $id  
         } 

          // **************************************************Faculty Registration part end**************************************
          
           // **************************************************Logo part start**************************************
 

     function all_logo()
 {
    
        $query = $this->db->get('logo');  
         return $query;  

  }

  function store_logo_data($data){
    
 $this->db->insert('logo', $data);
}


        function fetch_single_logo($id)  

      { 
           $this->db->where("id", $id);  
           $query = $this->db->get("logo");  
           return $query->result();  
          
      } 

        function update_logo($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("logo", $data);  
          
      } 


     
          // **************Logo part end*********************



public function all_students(){
			$this->db->order_by("created_datetime", "desc");
			$query = $this->db->select("*")->get("student");
			$result = $query->result();
			return $result;
		}
		
public function get_data($id)
{
	$query = $this->db->select("*")->where("id", $id)->get("student");
	$result = $query->result();
	return $result;
}

// *******************user dashboard start ****************



         // ******************* user  start ****************
 Public function new_user($data)

  {
      

    $query=$this->db->insert('user',$data); 
    $insertId = $this->db->insert_id();

    return $insertId;  

   }


 Public function new_useradmin($data)

   {

    $query=$this->db->insert('user',$data);
    // $insertId = $this->db->insert_id();

    return $query;

   }



     function get_all_user()
 {
    
        $query = $this->db->get('user');  
         return $query;  

  }

    function fetch_single_user($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("user");  
           return $query->result();  
          
       } 

 function update_user($data, $id) 

        {  

           $this->db->where("id", $id);  
           $this->db->update("user", $data);  
          
         }

             function delete_user($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("user");  
           //DELETE FROM tbl_user WHERE id = $id  
         } 

 // *******************user end********************



         // ******************* user role start ****************




 Public function new_userrole($data)

   {

    $query=$this->db->insert('admin_role',$data);

   }



     function get_all_admin()
 {
    
        $query = $this->db->get('admin_role');  
         return $query;  

  }

    function fetch_single_userrole($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("admin_role");  
           return $query->result();  
          
       } 

 function update_userrole($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("admin_role", $data);  
          
         }

             function delete_userrole($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("admin_role");  
           //DELETE FROM tbl_user WHERE id = $id  
         } 

 // *******************user role end********************


// ******************* case(ticket) start ****************




 Public function new_case($data)

   {

    $query=$this->db->insert('case_ticket',$data);

   }



     function get_all_case()
 {
    $this->db->where("user_id", $this->session->userdata('id'));  
        $query = $this->db->get('case_ticket');  
         return $query;  

  }

    function get_all_case_admin($id)
 {
    $this->db->where("user_id", $id);  
        $query = $this->db->get('case_ticket');  
         return $query;  

  }

    function fetch_single_case($id)  

       { 
           $this->db->where("id", $id);  
           $query = $this->db->get("case_ticket");  
           return $query->result();  
          
       } 

 function update_case($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("case_ticket", $data);  
          
         }
         
       

             function delete_case($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("case_ticket");  
           //DELETE FROM tbl_user WHERE id = $id  
         } 

 // *******************case(ticket) end********************

  
  // ******************* schedule start ****************




 Public function new_schedule($data)

   {

    $query=$this->db->insert('schedule',$data);

   }



     function get_all_schedule()
 {
    
 $this->db->where("user_id", $this->session->userdata('id'));  
        $query = $this->db->get('schedule');  
     return $query;  
}

   function get_all_schedule_admin($id)
 {
    $this->db->where("user_id", $id);  
        $query = $this->db->get('schedule');  
         return $query;  

  }

    function fetch_single_schedule($id)  

{ 
           $this->db->where("id", $id);  
           $query = $this->db->get("schedule");  
           return $query->result();  
          
  
} 

 function update_schedule($data, $id) 

        {  
           $this->db->where("id", $id);  
           $this->db->update("schedule", $data);  
          
         }

             function delete_schedule($id)

         {  
           $this->db->where("id", $id);  
           $this->db->delete("schedule");  
           //DELETE FROM tbl_user WHERE id = $id  
         } 

 // *******************schedule end********************



  function get_admin_details($data)
    {

$result = $this->db->select('*')->from('user')->where(array('status' =>'Active'))->get()->result();
           // $result = $this->db->get_where('user',array('status'=>'Active'));
        
        $data['id'] = null;
        $data['status']=FALSE;
        // $data['type'] = null;
        foreach($result as $r)
           {

       if(($r->user_name == $data["user_name"]) && ($r->passwod == $data["passwod"]))

                {
                  $data['id'] = $r->id;
                  $data['user_type'] = $r->user_type; 
                  $data['phone'] = $r->phone; 
                  $data['email'] = $r->email; 
                  $data['batch_no'] = $r->batch_no; 
                  $data['status']=TRUE;
                  
                }

           }
        return $data;    
       
    }


 function update_status($data, $id)  
        { 

           $this->db->where("user_name", $id);  
        
           $this->db->update("user", $data);  

           return true;
          
         } 
         
               function filename_exists($username)
{
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->where('user_name', $username);
    $query = $this->db->get();
     //return $query->result(); 

    // print_r($query);
     echo $query->num_rows();
     exit;


   // return $result;
}


 }
    
    
     