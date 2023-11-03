import AdminLayout from "@/Layouts/AdminLayout";
import AdminBreadcrumb from "@/Components/Admin/AdminBreadcrumb";
import { Head, useForm, Link } from "@inertiajs/react";
export default function AdminCustomerCreate({ auth, sex }) {
    const { data, setData, errors, post } = useForm({
        role_id: 1,
        avatar_id: null,
        username: "",
        full_name: "",
        email: "",
        phone: "",
        sex_id: "",
        address: "",
        status: "0",
        birth_day: "",
        sort: 1,
    })
    const storeCustomer = (e) => {
        e.preventDefault();
        console.log(data);
    }
    return (
        <AdminLayout user={auth.user}>
            <Head title="Customer" />
            <div className="container-xxl flex-grow-1 container-p-y">
                <AdminBreadcrumb first="Admin / Customer" last="Create">
                    <Link href={route('admin.customer.index')} className="btn btn-secondary">Go back</Link>
                </AdminBreadcrumb>
                <div className="row">
                    <div className="col-md-12">
                        <div className="card mb-4">
                            <h5 className="card-header border-bottom">Customer create</h5>
                            <form onSubmit={storeCustomer} method="POST" role="form">
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
                                                <input className="form-control" type="text"
                                                    name="phone" id="phone" placeholder="Phone" value={data.phone}
                                                    onChange={(e) => setData('phone', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <div className="mb-0">
                                                <label htmlFor="email" className="form-label">Email</label>
                                                <input type="email" className="form-control"
                                                    name="email" value={data.email} id="email"
                                                    onChange={(e) => setData('email', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-12 mb-3">
                                            <div className="mb-0">
                                                <label htmlFor="address" className="form-label">Address</label>
                                                <input type="text" className="form-control"
                                                    name="address" value={data.address} id="address"
                                                    onChange={(e) => setData('address', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <div className="mb-0">
                                                <label htmlFor="birth_day" className="form-label">Birth day</label>
                                                <input type="date" className="form-control"
                                                    name="birth_day" value={data.birth_day} id="birth_day"
                                                    onChange={(e) => setData('birth_day', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-6 mb-3">
                                            <div>
                                                <label htmlFor="username" className="form-label">Username</label>
                                                <input className="form-control" type="text"
                                                    name="username" id="username" value={data.username}
                                                    onChange={(e) => setData('username', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-4 mb-3">
                                            <div>
                                                <label htmlFor="sort" className="form-label">Sort</label>
                                                <input className="form-control" type="text"
                                                    name="sort" id="sort" value={data.sort}
                                                    onChange={(e) => setData('sort', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                        <div className="col-md-4 mb-3">
                                            <div className="mb-0">
                                                <label htmlFor="sex_id" className="form-label">Sex</label>
                                                <select className="form-select" name="sex_id"
                                                    onChange={(e) => setData('sex_id', e.target.value)}
                                                    id="sex_id">
                                                    <option value="">Choice sex</option>
                                                    {sex.map(item => <option key={item.id} value={item.id}>{item.name}</option>)}
                                                </select>
                                            </div>
                                        </div>
                                        <div className="col-md-4 mb-3">
                                            <div className="mb-0">
                                                <label htmlFor="status" className="form-label">Status</label>
                                                <select className="form-select" name="status"
                                                    onChange={(e) => setData('status', e.target.value)}
                                                    value={data.status}
                                                    id="status">
                                                    <option value="">Choice status</option>
                                                    <option value="1">Open</option>
                                                    <option value="0">Close</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="card-footer border-top">
                                    <div className="d-flex justify-content-start">
                                        <button type="submit" className="btn btn-primary">Create</button>
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
