export default function Textarea({ className, ...props }) {
    return (
        <textarea
            className={`` + className}
            {...props}
        />
    );
}
