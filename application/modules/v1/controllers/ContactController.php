<?php

class ContactController extends Zend_Rest_Controller
{

    private $alegraClient;
    private $httpClient;

    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->alegraClient = new Zend_Config(require dirname(__FILE__) . '/../configs/alegra.php');
        $this->httpClient = new Zend_Http_Client();
        $this->httpClient->setAuth($this->alegraClient->email, $this->alegraClient->apiKey);
    }

    public function headAction()
    {}
    
    public function indexAction()
    {
        $this->httpClient->setUri("https://app.alegra.com/api/v1/contacts/");

        $response = $this->httpClient->request('GET');
        $this->getResponse()->setHttpResponseCode(200);

        $fullResponse = [
            "data" => Zend_Json::decode($response->getBody()),
            "message" => "Success"
        ];

        $this->_helper->json($fullResponse);
    }

    public function getAction()
    {
        $idParam = $this->_getParam('id');
        $this->httpClient->setUri("https://app.alegra.com/api/v1/contacts/" . $idParam);

        $response = $this->httpClient->request('GET');
        $this->getResponse()->setHttpResponseCode(200);

        $fullResponse = [
            "data" => Zend_Json::decode($response->getBody()),
            "message" => "Success"
        ];

        $this->_helper->json($fullResponse);
    }

    public function postAction()
    {
        $this->httpClient->setUri("https://app.alegra.com/api/v1/contacts/");

        $data = $this->getRequest()->getRawBody();
        $this->httpClient->setRawData($data, "application/json");

        $response = $this->httpClient->request('POST');
        $this->getResponse()->setHttpResponseCode(200);

        $fullResponse = [
            "data" => Zend_Json::decode($response->getBody()),
            "message" => "Success"
        ];

        $this->_helper->json($fullResponse);
    }

    public function putAction()
    {
        $this->httpClient->setUri("https://app.alegra.com/api/v1/contacts/");

        $data = $this->getRequest()->getRawBody();
        $this->httpClient->setRawData($data, "application/json");

        $response = $this->httpClient->request('PUT');
        $this->getResponse()->setHttpResponseCode(200);

        $fullResponse = [
            "data" => Zend_Json::decode($response->getBody()),
            "message" => "Success"
        ];

        $this->_helper->json($fullResponse);
    }

    public function deleteAction()
    {
        $idParam = $this->_getParam('id');
        $this->httpClient->setUri("https://app.alegra.com/api/v1/contacts/" . $idParam);

        $response = $this->httpClient->request('DELETE');
        $this->getResponse()->setHttpResponseCode(200);

        $fullResponse = [
            "data" => Zend_Json::decode($response->getBody()),
            "message" => "Success"
        ];

        $this->_helper->json($fullResponse);
    }

}

