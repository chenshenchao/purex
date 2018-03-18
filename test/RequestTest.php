<?php namespace test;

use PHPUnit\Framework\TestCase;
use purex\Request;

/**
 * 
 */
final class RequestTest extends TestCase {
    /**
     * 
     */
    public function testNew() {
        $server = [
            'REQUEST_URI' => '/a/b/c?d=1',
            'REQUEST_METHOD' => 'GET',
        ];
        $request = new Request($server);
        $this->assertEquals($request->method, 'GET');
        $this->assertEquals($request->path, '/a/b/c');
    }
}