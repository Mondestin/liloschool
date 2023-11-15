<?php

namespace App\Http\Controllers;

use App\DataTables\PrimaryStudentsDataTable;
use App\Models\PrimaryStudent;
use Illuminate\Http\Request;
use DataTables;
class PrimaryStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //  return $dataTable->render('primarystudents.index');
        // dd($dataTable->render('primarystudents.index'));
        if ($request->ajax()) {
            $data = PrimaryStudent::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
          
        return view('primarystudents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
