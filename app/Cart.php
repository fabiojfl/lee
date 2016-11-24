<?php


namespace CodeCommerce;


class Cart
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function add(Product $product)
    {

        $id = $product->id;

        if(count($product->images))

            $img = 'uploads/'.$product->images->first()->id.'.'.$product->images->first()->extension;

        else
            $img = 'images/sem-imagem.jpg';

        $this->items += [
            $id => [
                'qtd' => isset($this->items[$id]['qtd']) ? $this->items[$id]['qtd']++ : 1,
                'sale' => $product->sale,
                'name' => $product->name,
                'description' => $product->description,
                'image' => $img,
                'prodqtd' => $product->prodqtd,
            ]
        ];

            return $this->items;




     /*
        if (isset($qtdvl) > isset($this->items['qtd'])){

            $this->items += [
            $id =>
                [
                    'qtd'   => isset($this->items[$id]['qtd']) ? $this->items[$id]['qtd']++ : 1,
                    'sale' => $price,
                    'name'  => $name
                ]
            ];

        return $this->items;

        }else {

            return "problemas";

        }

    */
    }

    public function edit($id,$name,$sale,$qtd,$prodqtd)
    {
        $this->items += [

            $id =>
                [
                    'qtd'   => isset($this->items[$id][$qtd]) ? $this->items[$id][$qtd]++ : 1,
                    'sale' => $sale,
                    'name'  => $name,
                    'prodqtd' => $prodqtd,
                ]
        ];

        return $this->items;
    }

    public function remove($id)
    {
        unset($this->items[$id]);
    }



    public function all()
    {
        return $this->items;
    }

    public function getTotal()
    {
        $total = 0;
        foreach($this->items as $items)
        {
          $total += $items['qtd'] * $items['sale'];
        }
        return $total;
    }
    
    public function setQtd($id, $qtd, $prodqtd)

    {
    	if($qtd <= $prodqtd){
                $this->items[$id]['qtd'] = $qtd;
    	} else {
            return "ops";
        }

    }
    
	public function clear()
    {
        $this->items = [];
    }
}