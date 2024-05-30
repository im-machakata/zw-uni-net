<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\University;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $user = session('user');
        $universities = University::query()->limit(4)->get();
        $programs = Program::query()->limit(8)->distinct()->get(['name']);

        // guess related programs based on user qualifications
        if ($user && $user->type != 'university') {
            $matches = array();

            foreach ($user->qualifications as $record) {
                // find programs that require this specific subject/module
                $program = Program::query()
                    ->whereRelation('requirements', 'name', 'LIKE', "%$record->name%")
                    ->get(['name'])->first();

                // do not attempt to process the following if no record found
                if (empty($program)) continue;

                // if this programs has a grade same as the users, add to list
                if (is_bool(strpos($program->grades, $record->grades))) continue;

                // confirm if the program is not already in the list if any
                $matchedPrograms = array_column($programs->toArray(), 'name');
                if (!in_array(trim($program->name), $matchedPrograms)) $programs[] = $program;
            }

            // if no matches were found, just show the demo files
            if (!empty($matches)) $programs = $matches;
        }
        return view('index')
            ->with('programs', $programs)
            ->with('universities', $universities);
    }
}
