<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{
    /**
     * Summary of __construct
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(
        private ProductRepositoryInterface $productRepository
    ) {}

    /**
     * Summary of index
     * @return Response
     */
    public function index(): Response
    {
        $products = $this->productRepository->paginate(10);
        return Inertia::render("Admin/Product/Index", [
            "products" => $products,
        ]);
    }

    public function edit(string $productId): Response
    {
        $product = $this->productRepository->find($productId);
        return Inertia::render("Admin/Product/Edit", [
            "product" => $product,
        ]);
    }
}
