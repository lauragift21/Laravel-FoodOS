<?php 

namespace App;

class Cart
{
	public $items = null; //gruop of product taking truout this class as an associative array
	public $totalQty = 0;
	public$totalPrice = 0;

	public function __construct($oldCart)
	{
		if ($oldCart) {
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id)
	{
		$storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
		//below is checking if the user item is not null or empty 
		if ($this->items) {
			//below is checking if d user already have the item he wana add in the basically using the id to track it
			//taking second paarameter of d array_key_exists as an associative array and the key is the item id called d first parameter
			if (array_key_exists($id, $this->items)) { //checking in all product i already have weda
				$storedItem = $this->items[$id];
			}
		}
		//d following code will be done if the product is not already existing in the items list
		$storedItem['qty']++;
		$storedItem['price'] = $item->price * $storedItem['qty']; //e.g product price is 200naira and quantity u picked quantity of 3 it return 600naira as the total price of d product 

		$this->items[$id] = $storedItem;//basicaly this line add the product to cart if the product has not been added before and stores the product to the initially declared $stored item array 
		$this->totalQty++; 
		$this->totalPrice += $item->price; //increamenting initial price with present item price of d product
	}
}

?>