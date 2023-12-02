<?php
// GENERATED CODE -- DO NOT EDIT!

namespace WebEDC;

/**
 */
class EDCServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \WebEDC\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoLogin(\WebEDC\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebEDC.EDCService/DoLogin',
        $argument,
        ['\WebEDC\LoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \WebEDC\SeeAllTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoSeeAllTransaction(\WebEDC\SeeAllTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebEDC.EDCService/DoSeeAllTransaction',
        $argument,
        ['\WebEDC\SeeAllTransactionResponse', 'decode'],
        $metadata, $options);
    }

}
