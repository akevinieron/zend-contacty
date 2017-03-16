<?php

class ContactController extends Zend_Rest_Controller
{

    private $alegraClient;

    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->alegraClient = new Zend_Config(require dirname(__FILE__) . '/../configs/alegra.php');
    }

    public function headAction()
    {}
    
    public function indexAction()
    {
        $this->getResponse()->setHttpResponseCode(200);
        
        $data = [
            "data" => null,
            "message" => "Success"
        ];

        $this->_helper->json($data);
    }

    public function getAction()
    {
      $this->getResponse()->setHttpResponseCode(200);
        
        $data = [
            "data" => null,
            "message" => "Success"
        ];

        $this->_helper->json($data);
    }

    public function postAction()
    {
      $this->getResponse()->setHttpResponseCode(200);
        
        $data = [
            "data" => null,
            "message" => "Success"
        ];

        $this->_helper->json($data);
    }

    public function putAction()
    {
      $this->getResponse()->setHttpResponseCode(200);
        
        $data = [
            "data" => null,
            "message" => "Success"
        ];

        $this->_helper->json($data);
    }

    public function deleteAction()
    {
      $this->getResponse()->setHttpResponseCode(200);
        
        $data = [
            "data" => null,
            "message" => "Success"
        ];

        $this->_helper->json($data);
    }

}

