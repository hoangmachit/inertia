import { Link } from "@inertiajs/react";
export default function AdminAside() {
    const stopEvent = (e) => {
        e.preventDefault();
    }
    return (
        <>
            <aside id="layout-menu" className="layout-menu menu-vertical menu bg-menu-theme">
                <div className="app-brand demo">
                    <Link href={route('dashboard')} className="app-brand-link">
                        <span className="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
                    </Link>
                    <Link href={route('dashboard')} className="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i className="bx bx-chevron-left bx-sm align-middle"></i>
                    </Link>
                </div>
                <div className="menu-inner-shadow"></div>
                <ul className="menu-inner py-1">
                    <li className="menu-item active open">
                        <Link href={route('dashboard')} className="menu-link">
                            <i className="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Home</div>
                        </Link>
                    </li>
                    <li className="menu-header small text-uppercase">
                        <span className="menu-header-text">Application</span>
                    </li>
                    <li className="menu-item">
                        <a
                            href=""
                            target="_blank"
                            className="menu-link">
                            <i className="menu-icon tf-icons bx bx-envelope"></i>
                            <div data-i18n="Email">Email</div>
                            <div className="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li className="menu-item">
                        <a
                            href=""
                            target="_blank"
                            className="menu-link">
                            <i className="menu-icon tf-icons bx bx-chat"></i>
                            <div data-i18n="Chat">Chat</div>
                            <div className="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li className="menu-item">
                        <a
                            href=""
                            target="_blank"
                            className="menu-link">
                            <i className="menu-icon tf-icons bx bx-calendar"></i>
                            <div data-i18n="Calendar">Calendar</div>
                            <div className="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li className="menu-item">
                        <a
                            href=""
                            target="_blank"
                            className="menu-link">
                            <i className="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Kanban">Kanban</div>
                            <div className="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                        </a>
                    </li>
                    <li className="menu-item">
                        <a href="#" onClick={stopEvent} className="menu-link menu-toggle">
                            <i className="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul className="menu-sub">
                            <li className="menu-item">
                                <a href="pages-account-settings-account.html" className="menu-link">
                                    <div data-i18n="Account">Account</div>
                                </a>
                            </li>
                            <li className="menu-item">
                                <a href="pages-account-settings-notifications.html" className="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                            <li className="menu-item">
                                <a href="pages-account-settings-connections.html" className="menu-link">
                                    <div data-i18n="Connections">Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li className="menu-item">
                        <a href="" className="menu-link menu-toggle">
                            <i className="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul className="menu-sub">
                            <li className="menu-item">
                                <a href="auth-login-basic.html" className="menu-link" target="_blank">
                                    <div data-i18n="Basic">Login</div>
                                </a>
                            </li>
                            <li className="menu-item">
                                <a href="auth-register-basic.html" className="menu-link" target="_blank">
                                    <div data-i18n="Basic">Register</div>
                                </a>
                            </li>
                            <li className="menu-item">
                                <a href="auth-forgot-password-basic.html" className="menu-link" target="_blank">
                                    <div data-i18n="Basic">Forgot Password</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li className="menu-item">
                        <a href="" className="menu-link menu-toggle">
                            <i className="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">Misc</div>
                        </a>
                        <ul className="menu-sub">
                            <li className="menu-item">
                                <a href="pages-misc-error.html" className="menu-link">
                                    <div data-i18n="Error">Error</div>
                                </a>
                            </li>
                            <li className="menu-item">
                                <a href="pages-misc-under-maintenance.html" className="menu-link">
                                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li className="menu-header small text-uppercase"><span className="menu-header-text">General</span></li>
                    <li className="menu-item">
                        <Link
                            href={route('admin.setting.index')}
                            className="menu-link">
                            <i className="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Setting">Setting</div>
                        </Link>
                    </li>
                    <li className="menu-item">
                        <a
                            href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank"
                            className="menu-link">
                            <i className="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                </ul>
            </aside>
        </>
    )
}
