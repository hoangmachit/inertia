import AdminLayout from "@/Layouts/AdminLayout";
import { Head } from "@inertiajs/react";
export default function AdminProductEdit({ auth, product }) {
    return (
        <AdminLayout>
            <Head title={product.name_vi} />
            <h1>Hello Product edit</h1>
        </AdminLayout>
    )
}