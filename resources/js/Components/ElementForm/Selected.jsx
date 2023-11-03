export default function Selected({ children, ...props }) {
    return (
        <select
            {...props}
        >
            {children}
        </select>
    );
}
