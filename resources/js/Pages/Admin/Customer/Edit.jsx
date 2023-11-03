import AdminLayout from "@/Layouts/AdminLayout"
import AdminBreadcrumb from "@/Components/Admin/AdminBreadcrumb"
import { Head, Link, useForm } from "@inertiajs/react"
export default function AdminCustomerEdit({ auth, customer, sex }) {
    const { data, setData, put, errors, processing, recentlySuccessful } = useForm({
        role_id: customer.role_id,
        avatar_id: customer.avatar_id,
        username: customer.username,
        full_name: customer.full_name,
        email: customer.email,
        phone: customer.phone,
        sex_id: customer.sex_id,
        address: customer.address,
        status: customer.status,
        birth_day: customer.birth_day,
        sort: customer.sort,
    });
    const updateCustomer = (e) => {
        e.preventDefault();
        console.log(">>>E", e);
        // put(route('admin.customer.update'));
    };

    return (
        <AdminLayout
            user={auth.user}
        >
            <Head title="Customer" />
            <div className="container-xxl flex-grow-1 container-p-y">
                <AdminBreadcrumb first="Admin/Customer" last="Edit">
                    <Link href={route('admin.customer.index')} className="btn btn-secondary">Go back</Link>
                </AdminBreadcrumb>
                <div className="row">
                    <div className="col-md-12">
                        <div className="card mb-4">
                            <h5 className="card-header border-bottom">Customer detail</h5>
                            <form onSubmit={updateCustomer} method="POST" role="form">
                                <div className="card-body">
                                    <div className="mb-3">
                                        <label htmlFor="full_name" className="form-label">Full name</label>
                                        <input type="text" className="form-control"
                                            name="full_name" value={data.full_name} id="full_name"
                                            onChange={(e) => setData('full_name', e.target.value)}
                                        />
                                    </div>
                                    <div className="row">
                                        <div className="col-md-6 mb-3">
                                            <div className="mb-3">
                                                <label htmlFor="phone" className="form-label">Phone</label>
                                                <input type="text" className="form-control"
                                                    name="phone" value={data.phone} id="phone"
                                                    onChange={(e) => setData('phone', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <div className="mb-3">
                                                <label htmlFor="email" className="form-label">Email</label>
                                                <input type="email" className="form-control"
                                                    name="email" value={data.email} id="email"
                                                    onChange={(e) => setData('email', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-12 mb-3">
                                            <div className="mb-3">
                                                <label htmlFor="address" className="form-label">Address</label>
                                                <input type="text" className="form-control"
                                                    name="address" value={data.address} id="address"
                                                    onChange={(e) => setData('address', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <div >
                                                <label htmlFor="birth_day" className="form-label">Birth_day</label>
                                                <input className="form-control" type="text"
                                                    name="birth_day" id="birth_day"
                                                    value={data.birth_day}
                                                    onChange={(e) => setData('birth_day', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <div >
                                                <label htmlFor="username" className="form-label">Username</label>
                                                <input className="form-control" type="text"
                                                    name="username" id="username"
                                                    value={data.username}
                                                    onChange={(e) => setData('username', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-4 mb-3">
                                            <label htmlFor="sort" className="form-label">Sort</label>
                                            <input className="form-control" type="number"
                                                name="sort" id="sort"
                                                value={data.sort}
                                                onChange={(e) => setData('sort', e.target.value)}
                                            />
                                        </div>
                                        <div className="col-md-4 mb-3">
                                            <label htmlFor="customer_status_id" className="form-label">Sex</label>
                                            <select className="form-select"
                                                name="sex_id"
                                                value={data.sex_id}
                                                onChange={(e) => setData('sex_id', e.target.value)}
                                                id="sex_id">
                                                <option value="">Choice sex</option>
                                                {sex.map(item => <option key={item.id} value={item.id}>{item.name}</option>)}
                                            </select>
                                        </div>
                                        <div className="col-md-4 mb-3">
                                            <label htmlFor="customer_status_id" className="form-label">Status</label>
                                            <select className="form-select"
                                                name="status"
                                                value={data.status}
                                                onChange={(e) => setData('status', e.target.value)}
                                                id="status">
                                                <option value="">Choice status</option>
                                                <option value="1">Open</option>
                                                <option value="0">Close</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div className="card-footer border-top">
                                    <div className="d-flex justify-content-start">
                                        <button type="submit" className="btn btn-primary">Update</button>
                                        <button type="reset" className="btn btn-secondary ms-3">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div >
        </AdminLayout >
    )
}
