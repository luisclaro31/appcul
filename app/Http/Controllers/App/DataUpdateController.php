<?php

namespace App\Http\Controllers\App;

use App\BlackCommunity;
use App\CivilState;
use App\Credit;
use App\DataUpdate;
use App\DisabilityType;
use App\EthnicGroup;
use App\IndigenousPeople;
use App\Program;
use App\Schedule;
use App\Sex;
use App\SexualOrientation;
use App\User;
use App\VictimType;
use Illuminate\Http\Request;

use App\Http\Requests\CreateDataUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DataUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('index');
        //return view('app.data_update.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('id',Auth::user()->id)->first();
        $disability_types = DisabilityType::whereNotIn('id', [1])->orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $victim_types = VictimType::whereNotIn('id', [1])->orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $black_communities = BlackCommunity::whereNotIn('id', [1])->orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $indigenous_peoples = IndigenousPeople::whereNotIn('id', [1])->orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $ethnic_groups = EthnicGroup::whereNotIn('id', [1])->orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $credits = Credit::whereNotIn('id', [1])->orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $schedules = Schedule::orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $programs = Program::orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $civil_states = CivilState::orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $sexes = Sex::orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        $sexual_orientations = SexualOrientation::orderBy('description', 'ASC')->lists('description', 'id')->toArray();
        return view('app.data_update.create', compact('sexes', 'sexual_orientations', 'civil_states', 'programs', 'schedules', 'credits', 'ethnic_groups', 'indigenous_peoples', 'black_communities', 'victim_types', 'disability_types', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDataUpdateRequest $request)
    {
        $result = DataUpdate::create($request->all());
        Session::flash('message', $result->id . ' Añadido Con Exito');
        //return Redirect::away('http://evaluacion.ul.edu.co/', 301);
        return Redirect::to('logout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
