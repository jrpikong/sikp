<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index() {
        $contracts = Contract::paginate(10);
        return view('pages.contract.index', compact('contracts'));
    }

}
