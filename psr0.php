<?php
require(__DIR__.'/vendor/autoload.php');
/*
 * 根据博文中(http://www.vincentguo.cn/default/173.html)介绍的，使用PSR-0规则自动加载，对于最后一个\之后的类名，如有下划线会转化成路径分隔符
 * PHPExcel_IOFactory 就会转化为 PHPExcel\IOFactory
 * 按照配置的规则
 * "autoload": {
        "psr-0": {
            "PHPExcel": "Classes/"
        }
    }
 * PHPExcel_IOFactory => Classes/PHPExcel/IOFactory.php
 * */

$path = 'test.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load( $path );
$sheet = $objPHPExcel->getSheet(0);
$highestRowNum = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();
$highestColumnNum = PHPExcel_Cell::columnIndexFromString($highestColumn);
$usefullColumnNum = $highestColumnNum;

//只取第一行
$filed = [];
for($i=0; $i<$highestColumnNum;$i++){
	$cellName = PHPExcel_Cell::stringFromColumnIndex($i).'1';
	$cellVal = $sheet->getCell($cellName)->getValue();//取得列内容
	if( !$cellVal ){
		break;
	}
	$usefullColumnNum = $i;
	$filed []= $cellVal;
}

var_dump( $filed );
