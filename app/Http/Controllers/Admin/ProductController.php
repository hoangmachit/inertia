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
        $products = $this->productRepository->paginate(10, [], ['id' => 'desc']);
        return Inertia::render("Admin/Product/Index", [
            "products" => $products,
        ]);
    }

    /**
     * Summary of create
     * @return Response
     */
    public function create(): Response
    {
        return Inertia::render("Admin/Product/Create");
    }

    /**
     * Summary of edit
     * @param string $productId
     * @return Response
     */
    public function edit(string $productId): Response
    {
        $product = $this->productRepository->findOneBy(['id' => $productId], ['productList', 'productCat', 'productSub', 'productItem', 'productBrand', 'photo']);
        return Inertia::render("Admin/Product/Edit", [
            "product" => $product,
        ]);
    }
}
