<?php
namespace App\Repositories\Interfaces;
interface CatalogRepositoryInterface
{
    public function all();
    public function findFilters($request);
    public function joinTable($data_card,$table_name);
    public function getFilterData($table, $name, $joinColumn, $joinColumn2 = null);
    public function getBreadcrumbs($request);
}
