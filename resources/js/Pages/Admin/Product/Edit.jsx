import AdminLayout from "@/Layouts/AdminLayout";
import AdminBreadcrumb from "@/Components/Admin/AdminBreadcrumb";
import { Head, Link, useForm } from "@inertiajs/react";
import { TextInput, InputError, InputLabel, Selected, Textarea } from "@/Components/ElementForm";
export default function AdminProductEdit({ auth, product }) {
    const { data, reset, setData, error } = useForm({
        name_vi: product.name_vi,
        slug: product.slug,
        desc_vi: product.desc_vi,
        seo_title: "",
        seo_keyword: "",
        seo_description: "",
        type: "product",
        vendor: auth.user.name,
        sort: 1,
    });
    const updateProduct = (e) => {
        e.preventDefault();
    }
    return (
        <AdminLayout>
            <Head title={product.name_vi} />
            <div className="container-xxl flex-grow-1 container-p-y">
                <AdminBreadcrumb first="Admin / Product" last="Edit">
                    <Link href={route('admin.product.index')} className="btn btn-secondary">Go back</Link>
                </AdminBreadcrumb>
                <div className="row">
                    <div className="col-md-12">
                        <form onSubmit={updateProduct} method="POST" role="form" id="formUpdateProduct">
                            <div className="row">
                                <div className="col-md-8">
                                    <div className="card mb-4">
                                        <div className="card-header custom border-bottom">
                                            <h4>Product detail</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-3 mb-3">
                                                <InputLabel for="name_vi" className="form-label" value="Name vi" />
                                                <TextInput type="text" className="form-control" name="name_vi"
                                                    value={data.name_vi} id="name_vi"
                                                    onChange={(e) => setData('name', e.target.value)}
                                                />
                                            </div>
                                            <div className="mb-3">
                                                <InputLabel for="desc_vi" className="form-label" value="Description vi" />
                                                <Textarea rows={10} className="form-control" name="desc_vi"
                                                    value={data.desc_vi} id="desc_vi"
                                                    onChange={(e) => setData('desc_vi', e.target.value)}
                                                />
                                            </div>
                                            <div className="mb-3">
                                                <InputLabel for="content_vi" className="form-label" value="Content vi" />
                                                <Textarea rows={10} className="form-control" name="content_vi"
                                                    value={data.content_vi} id="content_vi"
                                                    onChange={(e) => setData('content_vi', e.target.value)}
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mb-4">
                                        <div className="card-header border-bottom d-flex justify-content-between align-items-center">
                                            <h4 className="m-0">Variants</h4>
                                            <Link href="">Setting variants</Link>
                                        </div>
                                        <div className="card-body mt-3">

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
                                                <Selected name="status" id="status"
                                                    value={data.status}
                                                    onChange={(e) => setData('status', e.target.value)}
                                                >
                                                    <option value="">Choice status</option>
                                                    <option value={1}>Open</option>
                                                    <option value={2}>Close</option>
                                                </Selected>
                                                <div className="invalid-feedback feedback_status"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mb-4">
                                        <div className="card-header custom">
                                            <h4>Slug</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-0">
                                                <InputLabel htmlFor="slug" className="form-label" value="Slug" />
                                                <TextInput type="text" className="form-control" name="slug" value={data.slug}
                                                    onChange={(e) => setData('slug', e.target.value)}
                                                    id="slug" />
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
                                            <div className="mt-3">
                                                <div className="d-flex justify-content-between align-items-center">
                                                    <label for="tags" className="form-label font-small">Tags</label>
                                                    <a href="#" className="font-small" id="managementTags"
                                                        data-url="{{ route('admin.tags.all_product', $product) }}">Cài đặt</a>
                                                </div>
                                                <TextInput type="text" className="form-control" name="tags"
                                                    id="tags" />
                                                <div className="invalid-feedback feedback_tag_name"></div>
                                                <div className="listTags">
                                                    <div className="item-tag">
                                                        <div className="d-flex justify-content-start align-items-center item-tag__content">
                                                            <span>Tag 1</span>
                                                            <button className="btnRemoveTags"
                                                                data-url="{{ route('admin.product_tag.delete', $pTag) }}"
                                                                type="button">
                                                                <span className="svg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor" className="bi bi-x"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mb-4">
                                        <div className="card-header custom border-bottom">
                                            <h4>Avatar</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-3 mb-3">
                                                <div className="photoUpload-zone">
                                                    <div className="photoUpload-detail" id="photoUpload-preview">
                                                        <img className="rounded" src="" alt="Alt Photo" />
                                                    </div>
                                                    <label className="photoUpload-file" id="photo-zone" for="file-zone">
                                                        <input type="file" name="file" id="file-zone" />
                                                        <input type="hidden" name="media_id" value="{{ $media?->id }}" />
                                                        <i className="fas fa-cloud-upload-alt"></i>
                                                        <p className="photoUpload-drop">Kéo và thả hình vào đây</p>
                                                        <p className="photoUpload-or">hoặc</p>
                                                        <p className="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                                    </label>
                                                    <div className="photoUpload-dimension">Width: 300 px - Height: 200 px
                                                        (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mb-4">
                                        <div className="card-header custom border-bottom">
                                            <h4>Gallery</h4>
                                        </div>
                                        <div className="card-body">
                                            <div className="mt-3 mb-3">
                                                <div className="appendMutipleFiles">
                                                    <div className="file-item" >
                                                        <img src="" alt="" />
                                                        <input type="hidden" name="media[]" value="" />
                                                        <button type="button" className="deleteMediaItem">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" className="bi bi-x-lg" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div className="photoUpload-zone">
                                                    <label className="photoUpload-file" id="photo-zone" for="file-zones">
                                                        <input type="file" name="files" multiple id="file-zones" />
                                                        <i className="fas fa-cloud-upload-alt"></i>
                                                        <p className="photoUpload-drop">Kéo và thả hình vào đây</p>
                                                        <p className="photoUpload-or">hoặc</p>
                                                        <p className="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                                    </label>
                                                    <div className="photoUpload-dimension">Width: 300 px - Height: 200 px
                                                        (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="row">
                                <div className="col-md-12">
                                    <div className="card">
                                        <div className="card-footer">
                                            <div className="d-flex justify-content-start">
                                                <button type="button" className="btn btn-primary btnUpdateProduct"
                                                    data-action="{{ route('admin.product.update', $product) }}">Update</button>
                                                <button type="reset" className="btn btn-secondary ms-3">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AdminLayout>
    )
}
