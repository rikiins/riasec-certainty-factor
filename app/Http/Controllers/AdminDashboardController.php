<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{
    Characteristic,
    User,
    CharacteristicRule,
    Questionaire,
    Summary
};

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $summary = new Summary();

        $data = [
            'site' => 'Dashboard Admin',
            'totalUsers' => $summary->getTotalUsers(),
            'totalAnalyzed' => $summary->getTotalAnalyzed(),
            'totalRules' => $summary->getTotalRules(),
            'totalCharacteristics' => $summary->getTotalCharacteristics(),
            'analyzedUsers' => $summary->getAnalyzedUsers(6)
        ];

        return view('admin.summary', $data);
    }

    public function rules(): View
    {
        $data = [
            'site' => 'Rules',
            'characteristicRules' => CharacteristicRule::orderBy('characteristic_id')->with('questionaire')->paginate(10),
            'characteristics' => Characteristic::all()
        ];

        return view('admin.rules', $data);
    }

    public function createRule(Request $request)
    {
        $validator = Validator::make($request->post(), [
            'questionaire' => 'required',
            'characteristic_id' => 'required',
            'mb' => 'required|decimal:2',
            'md' => 'required|decimal:2',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi data gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        $validated = $validator->validated();
        $questionaire = new Questionaire();
        $questionaire->questionaire = htmlspecialchars($validated['questionaire']);

        $questionaire->save();

        CharacteristicRule::insert([
            'questionaire_id' => $questionaire->id,
            'characteristic_id' => $validated['characteristic_id'],
            'mb' => $validated['mb'],
            'md' => $validated['md']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Rule baru berhasil ditambahkan'
        ]);
    }

    public function removeRule(Request $request)
    {
        $validator = Validator::make($request->post(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi data gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        $validated = $validator->validated();

        CharacteristicRule::where('id', $validated['id'])->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Rule berhasil dihapus'
        ]);
    }

    public function users(): View
    {
        $data = [
            'site' => 'Users',
            'users' => User::with('role')->paginate(10)
        ];

        return view('admin.users', $data);
    }
}
