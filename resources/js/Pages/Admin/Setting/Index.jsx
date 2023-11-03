import AdminLayout from "@/Layouts/AdminLayout";
import { Head } from "@inertiajs/react";
import UpdateSettingForm from "./Partials/UpdateSettingForm";
export default function AdminSettingIndex({ auth, setting, languages }) {
    return (
        <AdminLayout
            user={auth.use}
        >
            <Head title="Setting" />
            <div className="py-12">
                <div className="container-xxl flex-grow-1 container-p-y space-y-6">
                    <div className="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <UpdateSettingForm className="" languages={languages} setting={setting} />
                    </div>
                </div>
            </div>
        </AdminLayout>
    )
}
