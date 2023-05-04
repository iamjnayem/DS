<?php 
namespace DS\List;

use DS\List\ListNode;
require '../list/ListNode.php';

class LinkedList{
    private $_firstNode = null;
    private $_totalNodes = 0;

    public function insert(string $data = NULL)
    {
        $newNode = new ListNode($data);

        if($this->_firstNode === NULL){
            $this->_firstNode = &$newNode;
        }else{
            $currentNode = $this->_firstNode;
            while($currentNode->next){
                $currentNode = $currentNode->next;
            }

            $currentNode->next = &$newNode;
        }
    }

    public function displayList(){
        $currentNode = $this->_firstNode;
        while($currentNode){
            echo $currentNode->data . "\n";
            $currentNode= $currentNode->next;
        }
    }

}

$l = new LinkedList();
$l->insert(10);
$l->insert(10);
$l->insert(10);
$l->displayList();
