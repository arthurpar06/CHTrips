<?php

namespace Modules\CHTrips\Http\Controllers\Admin;

use App\Contracts\Controller;
use Illuminate\Http\Request;
use Modules\CHTrips\Models\TripTemplate;

/**
 * Admin controller
 */
class TripTemplatesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return view('chtrips::admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function create(Request $request)
    {
        return view('chtrips::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function edit(Request $request, TripTemplate $id)
    {
        return view('chtrips::admin.edit');
    }

    /**
     * Show the specified resource.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function show(Request $request, TripTemplate $id)
    {
        return view('chtrips::admin.show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     */
    public function update(Request $request, TripTemplate $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     */
    public function destroy(Request $request, TripTemplate $id)
    {
        $id->delete();
    }
}
