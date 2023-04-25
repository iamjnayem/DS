<?php 
// namespace DS\List\LinkedList;

// use DS\List\ListNode;
require '../list/ListNode.php';

class LinkedList{
    private $_firstNode = null;
    private $_totalNodes = 0;

    public function insert(string $data = NULL)
    {
        $newNode = new ListNode($data);

        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
            // echo $this->_firstNode;
        }
    }

}

$l = new LinkedList();
$l->insert(10);