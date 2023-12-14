<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;

    public function getTotalUsers()
    {
        return User::count();
    }

    public function getTotalAnalyzed()
    {
        return [
            'totalUsers' => AnalysisHistory::distinct('user_id')->count('user_id'),
            'totalAnalyzed' => AnalysisHistory::groupBy('user_id')->count()
        ];
    }

    public function getTotalRules()
    {
        return CharacteristicRule::count();
    }

    public function getTotalCharacteristics()
    {
        return Characteristic::count();
    }

    public function getAnalyzedUsers($page = 6)
    {
        return AnalysisHistory::join('users AS u', 'analysis_histories.user_id', '=', 'u.id')
            ->join('characteristics AS c', 'analysis_histories.characteristic_id', '=', 'c.id')
            ->select(['u.name', 'c.name AS ch_name', 'analysis_histories.percentage', 'analysis_histories.created_at'])
            ->orderByDesc('analysis_histories.created_at')
            ->orderBy('analysis_histories.characteristic_id')
            ->paginate($page);
    }
}
