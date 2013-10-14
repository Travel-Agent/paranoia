<?php
namespace Paranoia\Payment\Response;

abstract class ResponseAbstract
{
    /**
    * @var boolean
    */
    protected $_isSuccess;

    /**
    * @var string
    */
    protected $_transactionType;

    /**
    * @var string
    */
    protected $_orderId;

    /**
    * @var string
    */
    protected $_transactionId;

    /**
    * @var integer
    */
    protected $_responseCode;

    /**
    * @var string
    */
    protected $_responseMessage;

    /**
    * @var string
    */
    protected $_rawData;

    /**
     * @var integer
     */
    protected $_time;

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::isSuccess()
    */
    public function isSuccess()
    {
        return $this->_isSuccess;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::setIsSuccess()
    */
    public function setIsSuccess($isSuccess)
    {
        $this->_isSuccess = $isSuccess;
        return $this;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::getTransactionType()
    */
    public function getTransactionType()
    {
        return $this->_transactionType;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::setTransactionType()
    */
    public function setTransactionType($transactionType)
    {
        $this->_transactionType = $transactionType;
        return $this;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::getOrderId()
    */
    public function getOrderId()
    {
        return $this->_orderId;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::setOrderId()
    */
    public function setOrderId($orderId)
    {
        $this->_orderId = $orderId;
        return $this;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::getTransactionId()
    */
    public function getTransactionId()
    {
        return $this->_transactionId;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::setTransactionId()
    */
    public function setTransactionId($transactionId)
    {
        $this->_transactionId = $transactionId;
        return $this;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::getResponseCode()
    */
    public function getResponseCode()
    {
        return $this->_responseCode;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::setResponseCode()
    */
    public function setResponseCode($responseCode)
    {
        $this->_responseCode =  $responseCode;
        return $this;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::getResponseCode()
    */
    public function getResponseMessage()
    {
        return $this->_responseMessage;
    }

    /**
    * @see Paranoia\Payment\Response\ResponseInterface::setResponseMessage()
    */
    public function setResponseMessage($responseMessage)
    {
        $this->_responseMessage = $responseMessage;
        return $this;
    }

    /**
    * returns request as raw data.
    * @return string
    */
    public function getRawData()
    {
        return $this->_rawData;
    }

    /**
    * sets response data as raw.
    * @param string $rawData
    */
    public function setRawData($rawData)
    {
        $this->_rawData = $rawData;
        return $this;
    }

    /**
     * @see Paranoia\Payment\TransferInterface::getTime()
     */
    public function getTime()
    {
        return $this->_time;
    }

    /**
     * @see Paranoia\Payment\TransferInterface::setTime()
     */
    public function setTime($time)
    {
        $this->_time = $time;
        return $this;
    }
}
