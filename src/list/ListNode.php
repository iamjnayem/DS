<?php
namespace DS\List;
class ListNode{
    public $data = null;
    public $next = null;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
}

