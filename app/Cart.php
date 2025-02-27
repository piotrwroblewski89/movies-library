<?php

namespace App;


class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    

    public function __construct($oldCart)
    {
        /* chcek if ther is a cart*/ 
        if($oldCart)
        {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){

        /* adding items -> if cart exist add qty if not add new item*/ 
        $storedItem = ['qty'=> 0, 'price' => $item->price,'item'=> $item];
        if ($this->items){
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];

            }
        }
        $storedItem['qty']++;
        $storedItem['price']= $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function reduce($id){

    /* reduce function*/ 
        $this->items[$id]['qty']--;
        $this->items[$id]['price']-= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];

        if ($this->items[$id]['qty'] <=0) {
            unset($this->items[$id]);
        }
    }
/* rremove function*/ 
    public function remove($id){

        $this->totalQty-= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['item']['price']; 
        unset($this->items[$id]);
        
}
}