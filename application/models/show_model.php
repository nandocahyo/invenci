<?php
class show_model extends CI_Model{
 
   function selectAll()
   {
	$this->db->order_by("NAME","desc"); 
	return $this->db->get('PRODUCT')->result();
   }
   
   function input()
   {
	
	$Id = $this->input->post('ID');
	$NAMA_PRODUCT = $this->input->post('NAME');
    $STOK =$this->input->post('STOK');
    $HARGA =$this->input->post('HARGA');
    $DESKRIPSI =$this->input->post('DESKRIPSI');
    $GAMBAR =$this->input->post('GAMBAR');
    
    $data = array( 'ID'=>$Id, 'NAME'=>$NAME, 'STOK'=>$STOK, 'HARGA'=>$HARGA, 'DESKRIPSI'=>$DESKRIPSI, 'GAMBAR'=>$GAMBAR );
	$this->db->insert('PRODUCT',$data);	
   }
function delete($Id)
   {
        $this->db->delete('PRODUCT', array('ID'=>$Id));
   }
function update($Id)
   {
        $this->db->where('ID',$Id)->update('PRODUCT', $_POST);
   }
function select($Id)
   {
        return $this->db->get_where('PRODUCT', array('ID'=>$Id))->row();
    }
 
}
?>