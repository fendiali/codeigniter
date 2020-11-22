<?php
function home() {
    $data['page'] = 'home';
    $this->load->view('header',$data);
    $this->load->view('home');
    $this->load->view('footer');
}
function contact_us() {
    $data['page'] = 'contact_us';
    $this->load->view('header',$data);
    $this->load->view('contact_us');
    $this->load->view('footer');
}
 ?>
