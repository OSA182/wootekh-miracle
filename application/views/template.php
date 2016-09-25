<?php $this->load->view('template/header');?>
<?php $this->load->view('template/menu');?>

<?php
if(isset($content)){
    $this->load->view('pages/' . $content);
}
?>
<?php $this->load->view('template/footer');?>
