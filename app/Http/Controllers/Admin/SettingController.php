<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Setting;
use App\Repositories\Language\LanguageRepositoryInterface;
use App\Repositories\Setting\SettingRepositoryInterface;
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
}
