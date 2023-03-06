<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        return Language::all();
    }

    public function destroy(Request $request)
    {
        $langIds = $request->input('languages');
        if (!empty($langIds)) {
            Language::whereIn('lang_id', $langIds)->delete();
            return response()->json(['message' => 'Languages deleted successfully.']);
        } else {
            return response()->json(['message' => 'No languages selected for deletion.']);
        }
    }

    public function store(Request $request)
    {
        $languages = $request->input('languages');
        foreach ($languages as $language) {
            Language::create(['language' => $language]);
        }
    
        return response()->json(['message' => 'Languages created successfully']);
    }

}
