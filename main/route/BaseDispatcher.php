<?php namespace purplex\route;

use purex\response\HtmlMessage;

/**
 * 
 */
abstract class BaseDispatcher {
    /**
     * 
     */
    public function dispatch($request) {
        return new HtmlMessage('404 not found.', 404);
    }
}