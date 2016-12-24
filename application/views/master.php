<?php 
	$this->load->view('common/header'); 
	$this->load->view('common/top_menu'); 
	$this->load->view('common/sidebar'); 
	$this->load->view('common/breadcrumb'); 
?>

<?php 

echo $main_content;

?>

<?php $this->load->view('common/footer'); ?>