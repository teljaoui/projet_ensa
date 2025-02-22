<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactShowController extends Controller
{
    public function home()
    {
        $page_title = "Tableau de bord";
        return view('home', compact("page_title"));
    }
    public function allclient()
    {
        $page_title = "Clientes";
        return view('clients.clients', compact("page_title"));
    }
    public function addclient()
    {
        $page_title = "Clientes";
        return view("clients.add", compact("page_title"));
    }
    public function updateClient()
    {
        $page_title = "Clientes";
        return view('clients.update', compact("page_title"));
    }

    public function detailclient()
    {
        $page_title = "Clientes";
        return view('clients.info', compact("page_title"));
    }

    public function allproducts()
    {
        $page_title = "Produits";
        return view('products.products', compact("page_title"));
    }
    public function addproduct()
    {
        $page_title = "Produits";
        return view('products.add', compact("page_title"));
    }
    public function updateproduct()
    {
        $page_title = "Produits";
        return view('products.update', compact("page_title"));
    }
    public function detailproduit()
    {
        $page_title = "Produits";
        return view('products.info', compact("page_title"));
    }

    public function alldevis()
    {
        $page_title = "Devis";
        return view('devis.devis', compact("page_title"));
    }
    public function adddevis()
    {
        $page_title = "Devis";
        return view('devis.add', compact("page_title"));
    }
    public function updatedevis()
    {
        $page_title = "Devis";
        return view('devis.update', compact("page_title"));
    }
    public function detaildevis()
    {
        $page_title = "Devis";
        return view('devis.info', compact("page_title"));
    }

    public function allfacture()
    {
        $page_title = "Factures";
        return view('factures.factures', compact("page_title"));
    }

    public function addfacture()
    {
        $page_title = "Factures";
        return view('factures.add', compact("page_title"));
    }

    public function updatefacture()
    {
        $page_title = "Factures";
        return view('factures.update', compact("page_title"));
    }

    public function detailfacture()
    {
        $page_title = "Factures";
        return view('factures.info', compact("page_title"));
    }

}
