<?php
class showproduk extends CI_Controller{
function __construct()
{
      parent::__construct();
      $this->load->model('show_model');
}
function index()
{
$data['title'] = 'Ini contoh menampilkan data dengan Codeigniter';
 
      //memanggil function selectAll di model showbuku_model, dimasukkan ke $data['buku']
      $data['produk'] = $this->show_model->selectAll();      
 
      //meload view bernama buku_view.php dengan data variable adalah $data
      $this->load->view('produk_view', $data);
}
 
function input()
{
      $this->load->view('inputproduk_view');
}
function tambah()
{
        $this->show_model->input();     
        redirect ('showproduk');
}
 
function delete($Id)
{
        $this->show_model->delete($Id);
        redirect('showproduk');
}
function edit($Id) 
{
        if($_POST==NULL) {
            $data['no'] = $this->show_model->select($Id);
            $this->load->view('editproduk_view',$data);
        }else {
            $this->show_model->update($Id);
            redirect('showproduk');
        }
}
 
}
?>