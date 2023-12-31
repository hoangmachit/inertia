import AdminLayout from "@/Layouts/AdminLayout";
import AdminBreadcrumb from "@/Components/Admin/AdminBreadcrumb";
import AdminPaginate from "@/Components/Admin/AdminPaginate";
import { Head, Link } from "@inertiajs/react";
export default function AdminProductIndex({ auth, products }) {
    console.log(">>>>products", products);
    const { data, links, prev_page_url, next_page_url } = products;
    return (
        <AdminLayout
            user={auth.user}
        >
            <Head title="Product" />
            <div className="container-xxl flex-grow-1 container-p-y">
                <AdminBreadcrumb first="Admin" last="Product">
                    <Link href={route('admin.product.create')} className="btn btn-primary">Add product</Link>
                </AdminBreadcrumb>
                <div className="row mb-4">
                    <div className="col-md-12">
                        <div className="card">
                            <div className="card-header">
                                <h3 className="m-0">List of Product</h3>
                            </div>
                            <div className="card-body">
                                <div className="table-responsive text-nowrap">
                                    <table className="table">
                                        <thead className="table-light">
                                            <tr>
                                                <th>#No</th>
                                                <th>Name</th>
                                                <th>Created at</th>
                                                <th>Updated_at</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody className="table-border-bottom-0">
                                            {data?.map(product => {
                                                return <tr key={product.id}>
                                                    <td>
                                                        {product.id}
                                                    </td>
                                                    <td>
                                                        <Link
                                                            href={route('admin.product.edit', product)}>
                                                            <strong>{product.name_vi}</strong>
                                                        </Link>
                                                    </td>
                                                    <td>
                                                        {product.created_at}
                                                    </td>
                                                    <td>
                                                        {product.updated_at}
                                                    </td>
                                                    <td>
                                                        <span className="badge badge-success">{product.status ? 'Open' : "Close"}</span>
                                                    </td>
                                                    <td>
                                                        <div className="dropdown">
                                                            <Link className="btn btn-secondary"
                                                                href={route('admin.product.edit', product)}>
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor" className="bi bi-pencil-square"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fillRule="evenodd"
                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                    </svg>
                                                                </span>
                                                            </Link>
                                                            <button className="btn btn-danger ml-2"
                                                                href="">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor" className="bi bi-trash3"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            })}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div className="card-footer">
                                <div className="d-flex justify-content-center">
                                    <AdminPaginate links={links} />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AdminLayout>
    )
}
