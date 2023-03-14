<?php

namespace App\Http\Controllers;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitments = Recruitment::orderBy("id", "desc")->get();

        return view('recruitments.index',compact('recruitments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $entryform = $request->only('model_name', 'game_mode', 'rank', 'purpose', 'applicant', 'game_id', 'discord_id', 'content');
            
                $entry = new recruitment();
	            $entry->model_name = $entryform["model_name"];
	            $entry->game_mode = $entryform["game_mode"];
                $entry->rank = $entryform["rank"];
	            $entry->purpose = $entryform["purpose"];
                $entry->applicant = $entryform["applicant"];
                $entry->game_id = $entryform["game_id"];
                $entry->discord_id = $entryform["discord_id"];
                $entry->content = $entryform["content"];
	            $entry->save();

	            return redirect('/recruitment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitment $recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitment $recruitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruitment $recruitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        //
    }
}
