<?php

namespace App\Http\Controllers\API;


use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Subject::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:125|unique:subjects',
        ]);
        return Subject::Create([
            'name' => $request['name'],
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:25,'
        ]);
        $county = Subject::findOrFail($id);
        $county->update([
            'name' => $request['name'],
        ]);
        return ['message' => 'subject is updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $county = Subject::findOrFail($id);

        $county->delete();
    }
    public function search(){
        if ($search = \Request::get('q')) {
            $subject = Subject::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $subject = Subject::latest()->paginate(10);
        }
        return $subject;
    }
}
