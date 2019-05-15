<?php

class Template {
	protected $_ci;

	function __construct(){
        $this->_ci = &get_instance();
    }

	function utama($content, $data = NULL) {
		$data['menu'] = $this->_ci->load->view('template/menu', $data, TRUE);
		$data['topbar'] = $this->_ci->load->view('template/topbar', $data, TRUE);
		$data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('template/footer', $data, TRUE);
		$data['logoutmodal'] = $this->_ci->load->view('template/logout-modal', $data, TRUE);
		
		$this->_ci->load->view('template/index', $data);
	}
}