<?php
include "Queue.php";
include "Node.php";

$newQueue = new Queue();
$newNode = new Node();

if ($newQueue->isEmpty()){
    echo "It's Empty!<br>";
}else{
    echo "It's not Empty!<br>";
};
$newQueue->enqueue("New 1");
$newQueue->enqueue("New 2");
$newQueue->enqueue("New 3");

$newQueue->dequeue();
$newQueue->dequeue();

if ($newQueue->isEmpty()){
    echo "It's Empty!<br>";
}else{
    echo "It's not Empty!<br>";
};

$newQueue->enqueue("New 4");
$newQueue->enqueue("New 5");

$newQueue->dequeue();
$newQueue->dequeue();
$newQueue->dequeue();

if ($newQueue->isEmpty()){
    echo "It's Empty!<br>";
}else{
    echo "It's not Empty!<br>";
};

echo $newNode->readNode();




