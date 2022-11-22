<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Product;

class ProductsController extends AControllerBase
{
    public function authorize($action)
    {
        switch ($action)
        {
            case "index":
                return true;
            case "delete":
            case "create":
            case "newproduct":
            case "edit":
                return $this->app->getAuth()->isLogged();
        }
    }

    public function index(): Response
    {
        // tu by sa mali zobrazovať asi jednotlivé produkty? defalut
        $products = Product::getAll();
        return $this->html($products);
    }

    public function delete()
    {
        $id = $this->request()->getValue('id');

        $productToDelete = Product::getOne($id);
        if ($productToDelete) {
            $productToDelete->delete();
        }
        return $this->redirect("?c=products");

    }

    public function newproduct()
    {
        $id = $this->request()->getValue('id');
        $product = ($id ? Product::getOne($id) : new Product());

        // TODO doplnenie podmienok pre zlé vstupy!
        // naplname hodnoty z formulára

        $product->setNazov($this->request()->getValue('nazov'));
        $product->setPopis($this->request()->getValue('popis'));
        $product->setCena($this->request()->getValue('cena'));
        $product->setFoto($this->request()->getValue('fotka'));


        if ($this->overUnikatost() && $this->overFloat() && $this->overFoto() && $this->overNull()) {
            $product->save();
            return $this->redirect("?c=products");
        } else {
            //TODO oznam o nevyplnení správnich údajov
            return $this->redirect("?c=products&a=create");
        }
        //return $this->redirect("?c=products");
    }

    public function create()
    {
        return $this->html(new Product(), viewName: 'create.form');
    }

    public function edit()
    {
        // TODO čo ak zadám nejaké id ktoré neexistuje?
        $id = $this->request()->getValue('id');
        $productToEdit = Product::getOne($id);

        return $this->html($productToEdit, viewName: 'create.form');
    }

    public function overUnikatost(): bool
    {
        $products = Product::getAll('nazov = ?', [$this->request()->getValue('nazov')]);
        if ($products[0] == null) {
            return true;
        } else {
            return false;
        }
    }

    public function overFloat(): bool
    {
        $cena = floatval($this->request()->getValue('cena'));
        if ($cena > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function overFoto(): bool
    {
        $foto = $this->request()->getValue('fotka');
        if (preg_match("/\.(png|jpg)$/", $foto)) {
            return true;
        } else {
            return false;
        }
    }

    public function overNull() : bool
    {
        $nazov = $this->request()->getValue('cena');
        $cena = $this->request()->getValue('cena');
        if ($nazov != "" && $cena != "") {
            return true;
        } else {
            return false;
        }
    }

}