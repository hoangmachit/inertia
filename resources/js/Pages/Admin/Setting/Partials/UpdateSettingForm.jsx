import { InputError, InputLabel, PrimaryButton, TextInput, Selected, Textarea } from '@/Components/ElementForm/';
import { Link, useForm, usePage } from '@inertiajs/react';
import { Transition } from '@headlessui/react';

export default function UpdateSettingForm({ setting, className, languages }) {
    const { data, setData, put, errors, processing, recentlySuccessful } = useForm({
        language_id: setting.language_id,
        name_vi: setting.name_vi,
        name_en: setting.name_en,
        head_js: setting.head_js,
        body_js: setting.body_js,
        google_master_tool: setting.google_master_tool,
        google_analytics: setting.google_analytics,
    });
    const submit = (e) => {
        e.preventDefault();
        put(route('admin.setting.update'));
    };

    return (
        <section className={className}>
            <header>
                <h2 className="text-lg font-medium text-gray-900">Setting Information</h2>

                <p className="mt-1 text-sm text-gray-600">
                    Update your account's profile information and email address.
                </p>
            </header>
            <form onSubmit={submit} className="mt-6 space-y-6">
                <div>
                    <InputLabel htmlFor="language_id" value="Language" />
                    <Selected
                        value={data.language_id}
                        className="w-full mt-1 p-2 border rounded-md"
                        onChange={(e) => setData('language_id', e.target.value)}
                    >
                        {languages.map((item) => {
                            return <option key={item.id} value={item.id}>{item.language_name}</option>
                        })}
                    </Selected>
                    <InputError className="mt-2" message={errors.language_id} />
                </div>
                <div>
                    <InputLabel htmlFor="name_vi" value="Name vi" />

                    <TextInput
                        id="name_vi"
                        className="mt-1 block w-full"
                        value={data.name_vi}
                        onChange={(e) => setData('name_vi', e.target.value)}
                        required
                        isFocused
                        autoComplete="name_vi"
                    />
                    <InputError className="mt-2" message={errors.name_vi} />
                </div>

                <div>
                    <InputLabel htmlFor="name_en" value="Name en" />

                    <TextInput
                        id="name_en"
                        className="mt-1 block w-full"
                        value={data.name_en}
                        onChange={(e) => setData('name_en', e.target.value)}
                        required
                        autoComplete="name_en"
                    />
                    <InputError className="mt-2" message={errors.name_vi} />
                </div>
                <div>
                    <InputLabel htmlFor="body_js" value="Body JS" />

                    <Textarea
                        id="body_js"
                        className="w-full p-2 border rounded-md"
                        rows={8}
                        value={data.body_js}
                        onChange={(e) => setData('body_js', e.target.value)}
                        required
                        autoComplete="body_js"
                    />
                    <InputError className="mt-2" message={errors.body_js} />
                </div>
                <div>
                    <InputLabel htmlFor="google_master_tool" value="Google master tool" />

                    <Textarea
                        id="google_master_tool"
                        className="w-full p-2 border rounded-md"
                        rows={8}
                        value={data.google_master_tool}
                        onChange={(e) => setData('google_master_tool', e.target.value)}
                        required
                        autoComplete="google_master_tool"
                    />
                    <InputError className="mt-2" message={errors.google_master_tool} />
                </div>
                <div>
                    <InputLabel htmlFor="google_analytics" value="Google analytics" />

                    <Textarea
                        id="google_analytics"
                        className="w-full p-2 border rounded-md"
                        rows={8}
                        value={data.google_analytics}
                        onChange={(e) => setData('google_analytics', e.target.value)}
                        required
                        autoComplete="google_analytics"
                    />
                    <InputError className="mt-2" message={errors.google_analytics} />
                </div>
                <div className="flex items-center gap-4">
                    <PrimaryButton disabled={processing}>Save</PrimaryButton>

                    <Transition
                        show={recentlySuccessful}
                        enter="transition ease-in-out"
                        enterFrom="opacity-0"
                        leave="transition ease-in-out"
                        leaveTo="opacity-0"
                    >
                        <p className="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </section>
    );
}
