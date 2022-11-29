<?php Class Search Extends CI_Contrller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mymodel');
    }

    function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->mymodel->search($keyword);
        $this->load->view('dashboard_view',$data);
    }

}
?>