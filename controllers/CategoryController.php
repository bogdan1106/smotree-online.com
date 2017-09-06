<?php



/**
 * Контроллер CategoryController
 * Вывод материалов по категориям: Фильмы Сериалы Мультфильмы и Тв-Шоу
 */
class CategoryController
{
    /**
     * Action для страницы "Категории"
     */
    public function actionView($id, $page = 1) {

        // Список жанров для левого меню
        $genres = array();
        $genres = Genre::getGenresList();

        // Список материалов отсортированых по категории
        $oneCategoryList = Category::getMoviesListByCategory($id, $page);

        $oneCategoryList = array_filter($oneCategoryList, function($item) {
            return file_exists(ROOT. '/template/images/posters/'. $item['data_id'].'.jpg');
        });

        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Category::getTotalItemInCategory($id);

        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination ($total, $page, Serial::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once 'views/category/view.php';
        return true;
    }
}