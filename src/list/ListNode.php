<?php
// namespace DS\List\ListNode;

class ListNode{
    public $data = null;
    public $next = null;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
}

