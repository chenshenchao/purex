<?php namespace purex\response;

/**
 * 
 */
class HtmlMessage extends BaseMessage {
    /**
     * 
     */
    public function __construct($content, $code=200, $headers=null) {
        parent::__construct($code, array_merge([
            'Content-Type' => 'text/html'
        ], $headers));
        $this->content;
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