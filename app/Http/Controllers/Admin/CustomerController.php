<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Repositories\Sex\SexRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class CustomerController extends Controller
{
    /**
     * Summary of __construct
     * @param CustomerRepositoryInterface $customerRepository
     * @param SexRepositoryInterface $sexRepository
     */
    public function __construct(
        private CustomerRepositoryInterface $customerRepository,
        private SexRepositoryInterface $sexRepository,
    ) {}

    /**
     * Summary of index
     * @return Response
     */
    public function index(): Response
    {
        $customers = $this->customerRepository->paginate(10, [], ['id' => 'desc']);
        return Inertia::render("Admin/Customer/Index", [
            "customers" => $customers,
        ]);
    }

    /**
     * Summary of create
     * @return Response
     */
    public function create(): Response
    {
        $sex = $this->sexRepository->getAll();
        return Inertia::render("Admin/Customer/Create", [
            "sex" => $sex,
        ]);
    }

    /**
     * Summary of edit
     * @param string $customerId
     * @return Response
     */
    public function edit(string $customerId): Response
    {
        $customer = $this->customerRepository->find($customerId);
        $sex = $this->sexRepository->getAll();
        return Inertia::render("Admin/Customer/Edit", [
            "customer" => $customer,
            "sex" => $sex,
        ]);
    }

    /**
     * Summary of update
     * @param string $customerId
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(string $customerId, Request $request): RedirectResponse
    {
        $customer = $this->customerRepository->find($customerId);
        return Redirect::route("customer", $customer);
    }
}
