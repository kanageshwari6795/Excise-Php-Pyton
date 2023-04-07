/ Create a counter to store size and cost of each size
$counter = array();

// Customer 1 Purchased size 6 shoe for $55.
$counter['size_6'] = array('quantity' => 1, 'cost' => 55);

// Customer 2 Purchased size 6 shoe for $45.
$counter['size_6']['quantity'] += 1;
$counter['size_6']['cost'] += 45;

// Customer 3 Size 6 no longer available, so no purchase.

// Customer 4 Purchased size 4 shoe for $40.
$counter['size_4'] = array('quantity' => 1, 'cost' => 40);

// Customer 5 Purchased size 18 shoe for $60.
$counter['size_18'] = array('quantity' => 1, 'cost' => 60);

// Customer 6