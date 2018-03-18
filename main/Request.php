<?php namespace purex;

/**
 * Http Request
 * 
 */
class Request {
    private $info;

    /**
     * initialize.
     * 
     * @param array $argument: $_SERVER or custom.
     */
    public function __construct($argument) {
        $this->info = [
            'path' => strtok($argument['REQUEST_URI'], '?'),
            'time' => $argument['REQUEST_TIME_FLOAT'] ?? null,
            'method' => strtoupper($argument['REQUEST_METHOD']),
            'protocol' => $argument['SERVER_PROTOCOL'] ?? 'HTTP/1.1',
            'charset' => $argument['HTTP_ACCEPT_CHARSET'] ?? 'utf-8',
            'language' => $argument['HTTP_ACCEPT_LANGUAGE'] ?? 'en',
        ];
    }

    /**
     * get request info.
     * 
     * @param string $name: name.
     * @return mixed: value.
     */
    public function __get($name) {
        return $this->info[$name];
    }
}