<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ProductCollection
    {
        return new ProductCollection(Product::all());
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     */
    public function show(Product $product): ProductResource
    {
        return new ProductResource($product);
    }
}
