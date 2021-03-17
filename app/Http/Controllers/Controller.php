<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request){
//        $s = $request->s;
//        $contacts = Contact::where('name','LIKE',"%{$s}%")->orderBy('name')->paginate(8);
//        return view('contacts.index', compact('contacts'));
        dd('12312312');
    }
}
