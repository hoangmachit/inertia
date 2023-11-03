export default function Selected({ children, className, ...props }) {
    return (
        <select
            {...props}
            className={
                'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ' +
                className
            }
        >
            {children}
        </select>
    );
}
