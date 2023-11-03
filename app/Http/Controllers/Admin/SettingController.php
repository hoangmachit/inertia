<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Language\LanguageRepositoryInterface;
use App\Repositories\Setting\SettingRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class SettingController extends Controller
{
    /**
     * Summary of __construct
     * @param SettingRepositoryInterface $settingRepository
     * @param LanguageRepositoryInterface $languageRepository
     */
    public function __construct(
        private SettingRepositoryInterface $settingRepository,
        private LanguageRepositoryInterface $languageRepository
    ) {
    }

    /**
     * Summary of index
     * @return Response
     */
    public function index(): Response
    {
        $setting = $this->settingRepository->first();
        $languages = $this->languageRepository->getAll();
        return Inertia::render('Admin/Setting/Index', [
            'setting' => $setting,
            'languages' => $languages,
        ]);
    }

    /**
     * Summary of update
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $setting = $this->settingRepository->first();
        if (!$setting) {
            throw ValidationException::withMessages([
                'setting' => __('Update setting fail.'),
            ]);
        }
        $data = $request->all();
        $this->settingRepository->update($setting->id, $data);
        return Redirect::route('admin.setting.index');
    }

}
