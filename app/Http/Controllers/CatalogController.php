<?php

namespace App\Http\Controllers;

use App\Models\LotsItemCopart;
use App\Repositories\Interfaces\CatalogRepositoryInterface;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $catalogRepository;
    public function __construct(CatalogRepositoryInterface $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }
    /**
     * Метод для отображения каталога
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function catalog(Request $request)
    {
        $date_now = date("Y-m-d H:i:s"); // Получение текущей даты и времени
        $data_models = []; // Инициализация переменной для данных моделей
        $time_line = $this->getTimeLine(); // Получение временной линии

        // Получение данных для фильтров по состоянию, повреждению и топливу
        $list_filters = [
            'runs_drive' => $this->catalogRepository->getFilterData('lot_runs_drive', 'conditions', 'runs_drive_id'),
            'damage' => $this->catalogRepository->getFilterData('lot_damage', 'damage', 'damage_id', 'damage2_id'),
//            'damage' => $this->catalogRepository->getFilterData('lot_damage', 'damage', 'damage_id', 'damage2_id'),
            'fuel' => $this->catalogRepository->getFilterData('lot_fuel', 'fuel', 'fuel_id'),
        ];

        // Поиск автомобилей, учитывая фильтры
        $data_card = $this->catalogRepository->findFilters($request);
//        $data_card = $this->catalogRepository->joinTable($data_card);
        $data_card = $data_card->paginate(12);
        $breadcrumbs = $this->catalogRepository->getBreadcrumbs($request); // Получение данных для хлебных крошек
        $page_active = $request->input("page") ?? 1; // Получение активной страницы
        $page_count = $data_card->lastPage(); // Получение общего количества страниц

        // Отображение представления каталога с данными
        return view("page.catalog", compact('breadcrumbs', 'date_now', 'data_models', 'list_filters', 'data_card', 'page_active', 'time_line', 'page_count'));
    }

    /**
     * Метод для фильтрации и обновления каталога
     *
     * @param Request $request
     * @return string
     */
    public function catalog_filter(Request $request)
    {
        $data_card = $this->catalogRepository->findFilters($request);
        $data_card = $data_card->paginate(12);
        $date_now = date("Y-m-d H:i:s"); // Получение текущей даты и времени
        return view('components.catalog.car_card_list', compact('data_card', 'date_now'))->render(); // Отображение обновленного списка автомобилей
    }

    /**
     * Получение временной линии
     *
     * @return array
     */
    private function getTimeLine()
    {
        return [
            "min" => LotsItemCopart::min("year"),
            "max" => LotsItemCopart::max("year")
        ];
    }
}
