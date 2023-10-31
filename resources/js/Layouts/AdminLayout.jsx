import AdminAside from "@/Components/Admin/AdminAside";
import AdminFooter from "@/Components/Admin/AdminFooter";
import AdminNav from "@/Components/Admin/AdminNav";

export default function AdminLayout({ user, children }) {
    return (
        <>
            <div className="layout-wrapper layout-content-navbar">
                <div className="layout-container">
                    <AdminAside />
                    <div className="layout-page">
                        <AdminNav />
                        <div className="content-wrapper">
                            {children}
                            <AdminFooter />
                            <div className="content-backdrop fade"></div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}
