<?php

Class Single_Post extends Controller
{
    function index($link = '')
    {
   
        if($link == "")
        {
            $data['page_title']="Image not found";

            $this->view("blog/not_found",$data);
        }else{

        $posts = $this->loadModel("posts");
        $result = $posts->get_one($link);
        
       
        $data['post'] = $result;
    
        $data['page_title']="Single_Post";

       $this->view("blog/single_post",$data);
        }
    }
   
}
