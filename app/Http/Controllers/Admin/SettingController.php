<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Setting;
use Inertia\Inertia;
use Inertia\Response;

class SettingController extends Controller
{
    /**
     * Summary of index
     * @return \Inertia\Response
     */
    public function index(): Response
    {
        $setting = Setting::first();
        $languages = Language::all();
        return Inertia::render('Admin/Setting/Index', [
            'setting' => $setting,
            'languages' => $languages,
        ]);
    }
}
