
import { Link } from "@inertiajs/react";
export default function AdminPaginate({ links }) {
    return (
        <>
            <div className="d-flex justify-content-center">
                <nav>
                    <ul className="pagination justify-content-center">
                        {links.map((pagination, key) => {
                            const active = pagination.active ? 'active' : '';
                            return <li key={key} className={`page-item ${active}`}>
                                <Link className="page-link" href={pagination.url} tabIndex="-1" aria-disabled="true">
                                    <span dangerouslySetInnerHTML={{ __html: pagination.label }}></span>
                                </Link>
                            </li>
                        })}
                    </ul>
                </nav>
            </div>
        </>
    )
}
