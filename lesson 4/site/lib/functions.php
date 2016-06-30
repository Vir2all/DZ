<?php

//Константы ошибок
define('ERROR_NOT_FOUND', 1);
define('ERROR_TEMPLATE_EMPTY', 2);

/** Функция отрисовки HTML-макета
 * @param $layoutName
 * @param $title
 * @param $body
 * @return string
 */
function layout($layoutName, $title, $menu, $body)
{
    return render($layoutName, [
        "title" => $title,
        "menu" => $menu,
        "body" => $body,

    ]);
}


/**
 * Подключает наш файл шаблона с параметрами
 * @param $file
 * @param array $variables
 * @return string
 */
function render($file, $variables = [])
{
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found';
        exit(ERROR_NOT_FOUND);
    }

    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty';
        exit(ERROR_TEMPLATE_EMPTY);
    }

    ob_start();
    extract($variables);
    include $file;
    return ob_get_clean();
}


/* Функция формирования новости
*  @param $id       - если 0, формируется список-каталог новостей, иначе - конкретная новость (если есть)
*  @return string
* Нужно разобраться return
*/
function renderNews($id)
{
    global $NEWS;

    return (($id == 0) ? renderCatalogue(
        'Каталог новостей',
        $NEWS,
        'article',
        'news')
        : '(id=' . $id . ') ' . (isset($NEWS[$id]) ? $NEWS[$id]['article']
            : $NEWS["0"]['article'])
    );
}


/* Функция формирования страницы товара
*  @param $id       - если 0, формируется список-каталог товаров, иначе - конкретная новость (если есть)
*  @return string
* Нужно разобраться return
*/
function renderGoods($id, $sec)
{
    global $GOODS;
    global $SECTIONS;

    return (($id == 0) ? renderCatalogue(
        'Каталог товаров',
        ($sec == '') ? $SECTIONS : $GOODS,
        'descript',
        'shop',
        $sec)
        : (isset($GOODS[$id]) ? $GOODS[$id]['descript']
            : $GOODS["0"]['descript']));
}


/* Функция формирования списка-каталога
*  @param $list
*  @param $index
*  @return string
*  Разобраться с функцией
*/
function renderCatalogue($caption, $list, $index, $route, $section = 'none')
{
    $showCatalogue = '<p>' . $caption . '</p><ul>';
    foreach ($list as $id => $item) {
        if ($id != 0) {
            if ($section == '') {
                $showCatalogue .= '<p><li><a href="?route=' . $route . '&sec=' . $item['name'] . '">' . $item[$index] . '</a></li></p>';
            } else if (($section == 'none') || ($section == $item['section'])) {
                $showCatalogue .= '<p><li><a href="?route=' . $route . '&id=' . $id . '">' . $item[$index] . '</a></li></p>';
            }
        }
    }
    return $showCatalogue;
}


function renderPage($route, $params)
{
    echo layout(
        LAYOUT,
        TITLE,
        render(
            TPL_DIR . DIRECTORY_SEPARATOR . "navmenu.php"
        ),
        render(
            TPL_DIR . DIRECTORY_SEPARATOR . $route . ".php",
            $params
        )
    );
}
