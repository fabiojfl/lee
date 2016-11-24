<?php

namespace CodeCommerce\Http\Controllers;

use Cagartner\CorreiosConsulta\CorreiosConsulta;
use CodeCommerce\Cart;
use CodeCommerce\Http\Requests;
use CodeCommerce\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Cagartner\CorreiosConsulta\ServiceProvider;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    private $cart;


    /**
     * CartController constructor.
     * @param Cart $cart
     */
    public function __construct(Cart $cart, Product $product, CorreiosConsulta $consulta)
    {
        $this->cart = $cart;
        $this->product = $product;
        $this->frete = $consulta;
    }

    public function index()
    {
        if(!Session::has('cart')){
            Session::set('cart', $this->cart);
        }

        return view('store.cart',['cart'=>Session::get('cart')]);
    }

    public function frete()
    {
        $dados = [
            'tipo'              => 'pac', // opções: `sedex`, `sedex_a_cobrar`, `sedex_10`, `sedex_hoje`, `pac`, 'pac_contrato', 'sedex_contrato' , 'esedex'
            'formato'           => 'caixa', // opções: `caixa`, `rolo`, `envelope`
            'cep_destino'       => '71680366', // Obrigatório
            'cep_origem'        => '89062080', // Obrigatorio
            //'empresa'         => '', // Código da empresa junto aos correios, não obrigatório.
            //'senha'           => '', // Senha da empresa junto aos correios, não obrigatório.
            'peso'              => '1', // Peso em kilos
            'comprimento'       => '16', // Em centímetros
            'altura'            => '11', // Em centímetros
            'largura'           => '11', // Em centímetros
            'diametro'          => '0', // Em centímetros, no caso de rolo
            // 'mao_propria'       => '1', // Não obrigatórios
            // 'valor_declarado'   => '1', // Não obrigatórios
            // 'aviso_recebimento' => '1', // Não obrigatórios
        ];

        //Correios::frete($dados);
/*
        if ($request->ajax()) {
            response()->json(compact('usuarios'));
        }

        return view('usuarios.listar', compact('usuarios'));
        */
        $fretes = $this->frete->frete($dados);
        return Response::json($fretes);
    }

    public function add($id)
    {
        $cart = $this->getCart();
        $product = Product::find($id);
        $cart->add($product);

        Session::set('cart', $cart);

        return redirect()->route('store.cart');
    }

    public function destroy($id)
    {
        $cart = $this->getCart();
        $cart->remove($id);

        Session::set('cart', $cart);

        return redirect()->route('store.cart');
    }

    /**
     * @return Cart
     */
    public function getCart()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
        } else {
            $cart = $this->cart;
        }

        return $cart;
    }

    public function update(Requests\CartRequest $request, $id)
    {
        $qtd = $request->get("qtd");
        $prodqtd = $request->get("prodqtd");
        $cart = $this->getCart();
        $cart->setQtd($id, $qtd, $prodqtd);

        Session::set('cart', $cart);

        return redirect()->route('store.cart');
    }
}
