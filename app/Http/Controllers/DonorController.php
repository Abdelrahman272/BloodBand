<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $models = Donor::all();
        return view('donors.index', compact('models'));
    }

    public function destroy($id)
    {
        Donor::destroy($id);
        flash('Donor has been deleted')->success();
        return redirect()->route('donors.index');
    }
}
