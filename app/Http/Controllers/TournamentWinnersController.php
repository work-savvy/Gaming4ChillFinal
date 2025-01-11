<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Tournament;
//use Illuminate\Http\Request;
//
//class TournamentWinnersController extends Controller
//{
//    public function index()
//    {
//        $tournaments = Tournament::with(['firstPlaceRegistration', 'secondPlaceRegistration', 'thirdPlaceRegistration'])
//            ->whereNotNull('first_place_registration_id')
//            ->orWhereNotNull('second_place_registration_id')
//            ->orWhereNotNull('third_place_registration_id')
//            ->orderBy('end_date', 'desc')
//            ->get();
//
//        return view('tournament.winners', compact('tournaments'));
//    }
//}


namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentWinnersController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::with(['firstPlaceRegistration', 'secondPlaceRegistration', 'thirdPlaceRegistration'])
            ->where('is_active', false)  // Exclude active tournament
            ->where(function ($query) {
                $query->whereNotNull('first_place_registration_id')
                    ->orWhereNotNull('second_place_registration_id')
                    ->orWhereNotNull('third_place_registration_id');
            })
            ->orderBy('end_date', 'desc')
            ->get();

        return view('tournament.winners', compact('tournaments'));
    }
}
