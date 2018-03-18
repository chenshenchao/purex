<?php namespace purex\response;

/**
 * 
 */
class TextMessage extends BaseMessage {
    /**
     * 
     */
    public function __construct($content, $code=200, $headers=null) {
        parent::__construct($code, $headers + [
            'Content-Type' => 'text/plain'
        ]);
        $this->content = $content;
    }

    /**
     * 
     */
    public function peekContent() {
        return $this->content;
    }

    /**
     * 
     */
    public function echoContent() {
        return $this->content;
    }
}