<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Article;
use App\Cart;
use App\Category;
use App\User;
use App\Order;
use Session;
use Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth',['except' => ['index','show','eIndex','eShow','eStore']]);
    }

    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(6);
        $categories = Category::all();
        return view('articles.index')->with('articles',$articles)->with('categories',$categories);
    }

    public function eIndex()
    {
        return Article::all();
    }

    public function getCart()
    {
      if(!Session::has('cart')){
        return view('shop.kosarica');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shop.kosarica', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dohvacanje katergorija
        $categories=Category::all();

        //provjera je li admin
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        if($user->role == 'admin')
        {
            return view('articles.create')->with('categories',$categories);
        }
        return redirect('/articles')->with('error','Samo admin može kreirati artikle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
      'name'          =>'required',
      'cijena'        =>'required',
      'kolicina'      =>'required',
      'category_id'   =>'required|integer',
      'opis'          =>'required',
      'slika'         => 'image|nullable|max:1999'
    ]);

    //Za sliku
    if($request->hasFile('slika'))
    {
      //Dohvaćanje filename-a sa extenzijom
      $fileNameWithExt = $request->file('slika')->getClientOriginalName();
      //Dohvati samo $fileName
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      //dohvati samo ekstenziju
      $extension = $request->file('slika')->getClientOriginalExtension();
      //Ime za pohranu
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      //Upload slike
      $path = $request->file('slika')->storeAs('public/slike',$fileNameToStore);
    }else{
      $fileNameToStore = 'noimage.jpg';
    }

    $article = new Article;
    $article->name = $request->input('name');
    $article->cijena = $request->input('cijena');
    $article->kolicina = $request->input('kolicina');
    $article->category_id = $request->category_id;
    $article->opis = $request->input('opis');
    $article->user_id = auth()->user()->id;
    $article->slika = $fileNameToStore;
    $article->save();

    return redirect('/articles')->with('success', 'Artikl spremljen');
    }



    public function eStore(Request $request, $id)
    {
      $this->validate($request,[
      'name'          =>'required',
      'cijena'        =>'required',
      'kolicina'      =>'required',
      'category_id'   =>'required|integer',
      'opis'          =>'required',
      'slika'         => 'image|nullable|max:1999'
    ]);

    //Za sliku
    if($request->hasFile('slika'))
    {
      //Dohvaćanje filename-a sa extenzijom
      $fileNameWithExt = $request->file('slika')->getClientOriginalName();
      //Dohvati samo $fileName
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      //dohvati samo ekstenziju
      $extension = $request->file('slika')->getClientOriginalExtension();
      //Ime za pohranu
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      //Upload slike
      $path = $request->file('slika')->storeAs('public/slike',$fileNameToStore);
    }else{
      $fileNameToStore = 'noimage.jpg';
    }

    $article = new Article;
    $article->name = $request->input('name');
    $article->cijena = $request->input('cijena');
    $article->kolicina = $request->input('kolicina');
    $article->category_id = $request->category_id;
    $article->opis = $request->input('opis');
    $article->user_id = $id;
    $article->slika = $fileNameToStore;
    $article->save();

    return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article',$article);
    }

    public function eShow($id)
    {
      return Article::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
      if($user->role == 'admin')
      {
        $article = Article::find($id);
        return view('articles.edit')->with('article',$article);
      }
      return redirect('/articles')->with('error','Samo admin može uređivati artikle');
    }

    public function getCheckout(){
      if(!Session::has('cart')){
        return view('shop.kosarica');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      return view('shop.checkout')->with('total',$total);
    }

    public function storeOrder(Request $request){
        $this->validate($request,[
          'name'=>'required',
          'address'=>'required',
          'card_number'=>'required',
          'expiration_month'=>'required',
          'expiration_year' => 'required',
          'CVC' => 'required'
        ]);
        if(!Session::has('cart')){
          return view('shop.kosarica');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->user_id = auth()->user()->id;
        $order->save();

        Session::forget('cart');
        return redirect('/articles')->with('success', 'Narudžba pohranjena');
    }

    public function storeOrderApi(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'address'=>'required',
        'card_number'=>'required',
        'expiration_month'=>'required',
        'expiration_year' => 'required',
        'CVC' => 'required'
      ]);


      $order = new Order();
      $order->cart = serialize("asdsad");
      $order->name = $request->input('name');
      $order->address = $request->input('address');
      $order->user_id = $request->user()->id;
      $order->save();

      return $order;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
      'name'=>'required',
      'cijena'=>'required',
      'kolicina'=>'required',
      'opis'=>'required'
      ]);

      //Za sliku
      if($request->hasFile('slika'))
      {
        //Dohvaćanje filename-a sa extenzijom
        $fileNameWithExt = $request->file('slika')->getClientOriginalName();
        //Dohvati samo $fileName
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //dohvati samo ekstenziju
        $extension = $request->file('slika')->getClientOriginalExtension();
        //Ime za pohranu
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //Upload slike
        $path = $request->file('slika')->storeAs('public/slike',$fileNameToStore);
      }

      $article = Article::find($id);
      $article->name = $request->input('name');
      $article->cijena = $request->input('cijena');
      $article->kolicina = $request->input('kolicina');
      $article->category_id = $request->input('category_id');
      $article->opis = $request->input('opis');
      if($request->hasFile('slika')){
        $article->slika=$fileNameToStore;
      }
      $article->save();

      return redirect('/articles')->with('success', 'Artikl uspješno uređen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $article = Article::find($id);
      $article->delete();

      if($article->slika != 'noimage.jpg'){
        //ako je ima, obriši je
        Storage::delete('public/slike/$article->slika');
      }

      return redirect('/articles')->with('success', 'Artikl je obrisan');
    }

    public function addToCard(Request $request,$id)
    {
        $product = Article::find($id);
        if($product->kolicina>0){
          $oldCart = Session::has('cart') ? Session::get('cart') : null;
          $cart = new Cart($oldCart);
          $cart->add($product, $product->id);
          $product->kolicina--;
          $product->save();

          $request->session()->put('cart', $cart);
          return redirect('/articles')->with('success', 'Artikl uspješno dodan');
        }
        else{
          return redirect('/articles')->with('error', 'Nestalo zaliha');
        }
    }

    public function reduceByOne($id)
    {
      $product = Article::find($id);
      $product->kolicina++;
      $product->save();

      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      if(count($cart->items)>0){
        Session::put('cart',$cart);
      }else{
        Session::forget('cart');
      }
      return redirect('/shoppingCart')->with('success', 'Reduced');
    }

    public function removeItem($id)
    {


      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $product = Article::find($id);
      $product->kolicina+=$cart->items[$id]['qty'];
      $product->save();
      $cart->removeItem($id);

      if(count($cart->items)>0){
        Session::put('cart',$cart);
      }else{
        Session::forget('cart');
      }

      return redirect('/shoppingCart')->with('success', 'Removed');
    }
}
