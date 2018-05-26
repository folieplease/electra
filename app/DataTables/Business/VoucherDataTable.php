<?php

namespace App\DataTables\Business;

use App\Models\Business\Voucher;
use Yajra\DataTables\Services\DataTable;

class VoucherDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query);
            // ->addColumn('action', 'business/voucher.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Business\Voucher $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Voucher $model)
    {
        $empty = collect();
        return $empty;
        // return $model->newQuery()->select('id', 'add-your-columns-here', 'created_at', 'updated_at');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'Voucher No.',
            'Customer',
            'Status',
            'Valid From',
            'Valid End'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Business/Voucher_' . date('YmdHis');
    }
}