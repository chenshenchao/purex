<?php namespace purex\response;

/**
 * Base http response message
 * 
 * 
 */
abstract class BaseMessage {
    public $code;
    private $headers;

    /**
     * 
     */
    public function __construct($code=200, $headers=null) {
        $this->code = $code;
        $this->headers = [];
        foreach ($headers ?? [] as $key => $value) {
            $this->headers[strtoupper($key)] = $value;
        }
    }

    /**
     * 
     */
    public function hasHeader($name) {
        $key = strtoupper($name);
        return array_key_exists($key, $this->headers);
    }

    /**
     * 
     */
    public function getHeader($name) {
        $key = strtoupper($name);
        return $this->headers[$key];
    }

    /**
     * 
     */
    public function setHeader($name, $value) {
        $key = strtoupper($name);
        $this->headers[$key] = $value;
    }

    /**
     * 
     */
    public function letHeader() {
        foreach ($this->headers as $key => $value) {
            header($key.': '.$value, true);
        }
    }

    /**
     * 
     */
    abstract public function peekContent();

    /**
     * 
     */
    abstract public function echoContent();
}