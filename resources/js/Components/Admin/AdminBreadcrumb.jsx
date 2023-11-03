export default function AdminBreadcrumb({ first, last, children }) {
    return (
        <div className="d-flex justify-content-between mb-0 align-items-center mb-3">
            <h4 className="fw-bold"><span className="text-muted fw-light">{first} / </span> {last}</h4>
            {children}
        </div>
    )
}
