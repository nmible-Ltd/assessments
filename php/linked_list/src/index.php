<?php

class NotImplementedException extends BadMethodCallException
{}

class Node {
    private $data;

    public function __construct($data) {
        $this->data = $data;
        $this->next = $null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function setPrimaryNode() {
        throw new NotImplementedExecption();
    }
    public function traverse() {
        throw new NotImplementedExecption();
    }

    public function add() {
        throw new NotImplementedExecption();
    }
}
