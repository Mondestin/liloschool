<?php

namespace App\DataTables;

use App\Models\PrimaryStudent;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PrimaryStudentsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'primarystudents.action')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(PrimaryStudent $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('primarystudents-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('stNumber'), 
            Column::make('avatar'), 
            Column::make('stName'), 
            Column::make('stSurname'), 
            Column::make('stDob'), 
            Column::make('stStatus'), 
            Column::make('stGender'), 
            Column::make('stAddress'), 
            Column::make('stLevel'),
            Column::make('stClaCode'), 
            Column::make('stPhone'), 
            Column::make('stEmail'), 
            Column::make('stTown'),
            Column::make('stArea'), 
            Column::make('stDateJoin'),
            // Column::make('add your columns'),
        
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'PrimaryStudents_' . date('YmdHis');
    }
}
