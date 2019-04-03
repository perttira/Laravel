<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    
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
        /* Jos items sisältää jo itemin (not null) etsitään items arraysta id:tä vastaava product ja sijoitetaan storedItem muuttujaan. Mikäli items taulukosta ei löydy id:tä vastaavaa productia, storedItem asetetaan oletusarvoonsa ['qty' => 0, 'price' => $item->price, 'item' => $item] */
        
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
