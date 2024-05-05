<?php

class NotImplementedException extends BadMethodCallException
{}

class Node {
    private $data;
    private $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function setPrimaryNode() : void {
        throw new NotImplementedException();
    }
    public function traverse() : Array {
        throw new NotImplementedException();
    }

    public function add() : Node {
        throw new NotImplementedException();
    }

    public function reverse() : LinkedList {
        throw new NotImplementedException();
    }
}
