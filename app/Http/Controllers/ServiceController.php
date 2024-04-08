<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{    public function storeservice(Request $request)
    {
    $service = new Service();

    // Assign values from the request to model properties
    $service->name = $request->name;
    $service->info = $request->info;
    $service->image = $request->image;
    $service->price= $request->price;




    $service->save();


    return redirect()->route('admin')->with('success', 'Form submitted successfully!');

    }

    public function index()
    {
        $services = Service::all();
        return view('pages/services', compact('services'));
    }

    public function bookCart()
    {
        return view('pages/cart');
    }
    public function addBooktoCart($id)
    {
        $service = service::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $service->name,
                "quantity" => 1,
                "price" => $service->price,
                "image" => $service->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Service has been added to cart!');
    }

    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Service added to cart.');
        }
    }

    public function deleteProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Service successfully deleted.');
        }
    }


    public function showServices()
    {
        $products = Service::all();
        return view('pages.Adminservice', compact('products'));
    }

    public function deleteProductadmin($id)
    {
        if($id) {
            $product = Product::find($id);
            if($product) {
                $product->delete();
                session()->flash('success', 'Product successfully deleted.');
            } else {
                session()->flash('error', 'Product not found.');
            }
        } else {
            session()->flash('error', 'Invalid product ID.');
        }
        return redirect()->route('admin');
    }

    public function remove($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('admin')->with('success', 'Service has been deleted');;

    }



}
