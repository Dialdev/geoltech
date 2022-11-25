<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (count($arResult) < 2) return;
$strReturn = '<ul class="breadcrumbs center">';
$count = count($arResult);
foreach($arResult as $key => $arItem)
	if ($key == 0)
		$strReturn .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" itemref="breadcrumb_'.($key+1).'" class="breadcrumb__item"><a href="'.$arItem["LINK"].'" title="'.$arItem["TITLE"].'" itemprop="url" class="breadcrumb__link"><span itemprop="title">'.$arItem["TITLE"].'</span></a> / </li>';
	elseif ($key + 1 < $count)
		$strReturn .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="child" itemref="breadcrumb_'.($key+1).'" id="breadcrumb_'.$key.'" class="breadcrumb__item"><a href="'.$arItem["LINK"].'" title="'.$arItem["TITLE"].'" itemprop="url" class="breadcrumb__link"><span itemprop="title">'.$arItem["TITLE"].'</span></a> / </li>';
	else
		$strReturn .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="child" id="breadcrumb_'.$key.'" class="breadcrumb__item"><a href="'.$arItem["LINK"].'" title="'.$arItem["TITLE"].'" itemprop="url" class="breadcrumb__link breadcrumb__link_current"><span itemprop="title">'.$arItem["TITLE"].'</span></a></li>';
$strReturn .= '</ul>';
return $strReturn;
?>

<?/*
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
if (empty($arResult))
    return "";
$strReturn = '';
if (CSite::InDir('/about/')) {
    $dopClass = " container_min";
}
$strReturn .= '<div class="breadcrumbs"><div class="container' . $dopClass . '"><div class="breadcrumbs__wrap" itemscope="" itemtype="http://schema.org/BreadcrumbList"><ul class="breadcrumbs__list">';
$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    $arrow = ($index > 0 ? '<i class="fa fa-angle-right"></i>' : '');
    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '<li class="breadcrumbs__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><meta itemprop="position" content="' . ($index) . '">
        <a class="breadcrumbs__link"  itemprop="item" href="'.$arResult[$index]['LINK'].'" title="'.$title.'" ><span  itemprop="name">'.$title.'</span></a>
        </li>';
    } else {
        $strReturn .= '<li class="breadcrumbs__item _active">' . $title . '</li>';
    }
}
$strReturn .= '</ul></div></div></div>';
return $strReturn;*/