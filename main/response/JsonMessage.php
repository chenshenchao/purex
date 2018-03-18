<?php namespace purex\response;

/**
 * Json http response message
 * 
 */
class JsonMessage extends BaseMessage {
    /**
     * 
     */
    public function __construct($content, $code=200) {
        parent::__construct($code, [
            'Content-Type' => 'application/json'
        ]);
        $this->content = $content;
    }

    /**
     * 
     */
    public function peekContent() {
        return json_encode($this->content);
    }

    /**
     * 
     */
    public function echoContent() {
        echo json_encode($this->content);
    }
}