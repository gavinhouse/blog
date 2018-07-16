<?php

class Files{

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper("file");
    }

    public function deleteImage($filename){

        $path = './images/uploads/';
        unlink($path . $filename);
    }

    public function uploadFile(){
        $config['upload_path']          = './images/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->CI =& get_instance();
        $this->CI->load->library('upload', $config);
        $this->CI->upload->do_upload();
        return $this->CI->upload->data('file_name');
    }
}
