<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use InvalidArgumentException;
use App\Models\ {
    AnalysisHistory,
    CharacteristicRule,
    Score
};

class DashboardController extends Controller
{
    public function index(): View
    {
        $data = [
            'site' => 'Dashboard'
        ];

        if (AnalysisHistory::where('user_id', auth()->user()->id)->count() == 0) {
            return view('user.sites.welcome-screen', $data);
        }

        $data['analysisHistory'] = AnalysisHistory::where('user_id', auth()->user()->id)->with('characteristic')->get();
 
        return view('user.sites.analysis-result', $data);
    }

    public function questionaires(): View
    {
        $data = [
            'site' => 'Kuisioner',
            'scores' => Score::all(),
            'characteristicRules' => CharacteristicRule::orderBy('characteristic_id')->with('questionaire')->get()
        ];

        return view('user.sites.questionaires', $data);
    }

    public function analyze(Request $request)
    {
        if (AnalysisHistory::where('user_id', auth()->user()->id)->count() > 0) {
            return redirect()->route('home');
        }

        $validated = $request->validate([
            'users_cf.*.id' => 'required|integer',
            'users_cf.*.value' => 'required|decimal:2'
        ]);

        $hasResults = $this->calculateCF($validated['users_cf']);

        if (!$hasResults) {
            return redirect()->back()->withErrors([
                'message' => 'Terjadi kesalahan perhitungan nilai CF'
            ]);
        }

        return redirect()->route('home');
    }

    private function calculateCF($usersCF)
    {
        if (!is_array($usersCF))
        {
            throw new InvalidArgumentException("The given argument is not an array.");
        }

        $createdAt = date('Y-m-d H:i:s');
        $characteristicRules = CharacteristicRule::orderBy('characteristic_id')->get();
        $groupedCalculatedCFEvidence = [];

        foreach ($usersCF as $key => $value)
        {
            if (floatval($value['value']) == 0) break;

            $CFRule = round($characteristicRules[$key]->mb) - $characteristicRules[$key]->md;
            $CFEvidence  = $value['value'] * $CFRule;
            
            $groupedCalculatedCFEvidence[ $characteristicRules[$key]->characteristic_id ][] = $CFEvidence;
        }

        $groupedCFResults = [];

        foreach ($groupedCalculatedCFEvidence as $key => $value) {
            $CFResults = array_shift($value);

            foreach ($value as $v) {
                if ($CFResults < 0 && $v < 0) {
                    $CFResults = $CFResults + $v * (1 + $CFResults);    
                } else {
                    $CFResults = $CFResults + $v * (1 - $CFResults);
                }
            }

            $groupedCFResults[] = [
                'user_id' => auth()->user()->id,
                'characteristic_id' => $key,
                'created_at' => $createdAt,
                'percentage' => round($CFResults * 100, 2)
            ];
        }

        return AnalysisHistory::insert($groupedCFResults);
    }
}
