<?php

namespace App\Http\Controllers;

use App\DataTables\PrimaryStudentsDataTable;
use App\Models\PrimaryStudent;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Controllers\Traits\ActionsButtons;
class PrimaryStudentController extends Controller
{
    use ActionsButtons;
    private string $modelRoute="students";

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PrimaryStudent::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('photo', function($data){
                        $url=asset('assets/images/users/user.png'); 
                        return '<img src='.$url.' border="0" width="30" class="avatar-sm rounded" align="center" />'; 
                    })
                    ->addColumn('action', function($data){
                    return $this->actionTablesButtons($data->id, $this->modelRoute);
                    })
                    ->rawColumns(['action','photo'])
                    ->make(true);
        }
        return view('primary/students.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('primary/students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PrimaryStudent $primaryStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrimaryStudent $primaryStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrimaryStudent $primaryStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrimaryStudent $primaryStudent)
    {
        //
    }
}
