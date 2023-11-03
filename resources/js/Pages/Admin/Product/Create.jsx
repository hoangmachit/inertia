import AdminBreadcrumb from "@/Components/Admin/AdminBreadcrumb";
import AdminLayout from "@/Layouts/AdminLayout";
import { Head, Link, useForm } from "@inertiajs/react";
import { InputLabel, InputError, TextInput, Textarea, Selected, SecondaryButton, PrimaryButton } from "@/Components/ElementForm";
export default function AdminProductCreate({ auth }) {
    const { data, errors, post, reset, setData } = useForm({
        name_vi: "",
        desc_vi: "",
        seo_title: "",
        seo_keyword: "",
        seo_description: "",
        type: "product",
        vendor: auth.user.name,
        sort: 1,
    });
    const storeProduct = (e) => {
        e.preventDefault();
    }
    return (
        <AdminLayout
            user={auth.user}
        >
            <Head title="Product" />
            <div className="container-xxl flex-grow-1 container-p-y">
                <AdminBreadcrumb first="Admin / Product" last="Create">
                    <Link href={route('admin.product.index')} className="btn btn-secondary">Go back</Link>
                </AdminBreadcrumb>
                <div className="row">
                    <div className="col-md-12">
                        <form onSubmit={storeProduct} method="POST" role="form" id="formCreateProduct">
                            <div className="row">
                                <div className="col-md-8">
                                    <div className="card mb-4">
                                        <div className="card-header custom border-bottom">
                                            <h4>Product detail</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-3 mb-3">
                                                <InputLabel htmlFor="name" className="form-label" value="Name vi" />
                                                <TextInput type="text" className="form-control" name="name_vi" value={data.name_vi}
                                                    onChange={(e) => setData('name_vi', e.target.value)}
                                                    id="name_vi" />
                                            </div>
                                            <div className="mb-3">
                                                <InputLabel htmlFor="desc_vi" className="form-label" value="Description" />
                                                <Textarea name="desc_vi" className="form-control" id="desc_vi" cols={30} rows={7}
                                                    value={data.desc_vi}
                                                    onChange={(e) => setData('desc_vi', e.target.value)} />
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mb-4">
                                        <div className="card-header custom border-bottom">
                                            <h4>Seo</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-3 mb-3">
                                                <InputLabel htmlFor="seo_title" className="form-label" value="Seo title" />
                                                <TextInput type="text" className="form-control" name="seo_title" value={data.seo_title}
                                                    onChange={(e) => setData('seo_title', e.target.value)}
                                                    id="seo_title" />
                                            </div>
                                            <div className="mt-3 mb-3">
                                                <InputLabel htmlFor="seo_keyword" className="form-label" value="Seo keyword" />
                                                <TextInput type="text" className="form-control" name="seo_keyword" value={data.seo_keyword}
                                                    onChange={(e) => setData('seo_keyword', e.target.value)}
                                                    id="seo_keyword" />
                                            </div>
                                            <div className="mb-3">
                                                <InputLabel htmlFor="seo_description" className="form-label" value="Seo description" />
                                                <Textarea name="seo_description" className="form-control" id="seo_description" cols={30} rows={7}
                                                    value={data.seo_description}
                                                    onChange={(e) => setData('seo_description', e.target.value)} />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-4">
                                    <div className="card mb-4">
                                        <div className="card-header custom">
                                            <h4>Status</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-0">
                                                <Selected
                                                    className="form-select" name="status" id="status"
                                                    value={data.status}
                                                >
                                                    <option value="">Choice status</option>
                                                    <option value="1">Open</option>
                                                    <option value="0">Close</option>
                                                </Selected>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mb-4">
                                        <div className="card-header custom border-bottom">
                                            <h4>Product organization</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-3">
                                                <InputLabel htmlFor="type" className="form-label" value="Product type" />
                                                <TextInput type="text" className="form-control" name="type"
                                                    readOnly
                                                    defaultValue={data.type}
                                                    id="type" />
                                            </div>
                                            <div className="mt-3">
                                                <InputLabel htmlFor="type" className="form-label" value="Vendor" />
                                                <TextInput type="text" className="form-control" name="vendor"
                                                    readOnly
                                                    defaultValue={data.vendor}
                                                    id="vendor" />
                                            </div>
                                            <div className="mt-3">
                                                <InputLabel htmlFor="type" className="form-label" value="Sort" />
                                                <TextInput type="number" className="form-control" name="sort"
                                                    value={data.sort}
                                                    onChange={(e) => setData('sort', e.target.value)}
                                                    id="sort" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-md-12">
                                    <div className="card">
                                        <div className="card-footer">
                                            <div className="d-flex justify-content-start">
                                                <PrimaryButton type="submit" className="mr-2">Create</PrimaryButton>
                                                <SecondaryButton type="reset"
                                                    onClick={(e) => reset()}
                                                >Reset</SecondaryButton>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div >
        </AdminLayout >
    )
}
