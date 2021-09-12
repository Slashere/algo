<?php


class Node {

	public $next;
	public $int;
	public function __construct($next, $int) {
		$this->next = $next;
		$this->int = $int;
	}
	

}

$first = new Node(null, 3);
$second = new Node($first, 5);
$third = new Node($second, 7);

/*
function goThroughNext(Node $node){
	echo $node->int;
	if ($node->next == null) return $node->int;
	else return goThroughNext($node->next);
}
*/
function goThroughNext(Node $node){
	while ($node->next != null) {
		$next = $node->next;
		$node = $next;
	}
	return $next->int;
}


echo '<pre>';
echo goThroughNext($third);

echo '-------first-------';

print_r($first->next);
echo PHP_EOL;
echo '--------------';

print_r($second->next);
echo '--------------';
echo PHP_EOL;

print_r($third->next->next);
echo PHP_EOL;

echo '--------------';

function reversList($node) {
	$p1 = null;
	$p2 = $node;
	while ($p2 != null) {
		$p3 = $p2->next;
		$p2->next = $p1;
		$p1 = $p2;
		$p2 = $p3;
	}
	return $p1;
}

print_r($first->next);
print_r($second->next);
print_r($third->next);


$head = reversList($third);
echo goThroughNext($head);

echo '</pre>';
