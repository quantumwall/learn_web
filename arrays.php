<?php
    
    setlocale(LC_ALL, '');
    require_once "sources/html_tpl.php";
    require_once "sources/function.php";

    head_html("Arrays");


    $arr = ["a" => "zero",
            "t" => "Zero",
            "d" => "Centauro",
			"c" => "Zero"];
	//shuffle для перемешивания массива
	//в данном случае нужен чтобы потеять ключи
	//т.к. в php7 нельзя распаковать ассоциативные
	//массивы в функцию
    $index_array = ["Patatas", "Tomato", "Bacon"];
    myprint("Before string sorting:\n");
	myprintr($arr);
    asort($arr);
    myprint("After string sorting:\n");
	myprintr($arr);
    arsort($arr);
	myprintr($arr);
    asort($arr, SORT_NUMERIC);
    myprint("Numeric sort:\n");
	myprintr($arr);
    print "\n";
    asort($index_array);
    foreach ($index_array as $key => $value) {
        print "$key => $value\n";
    } 
    foreach (array_reverse($index_array) as $key => $value) {
        print "$key => $value";
    }
    //shuffle($arr);
    shuffle($index_array);
	myprintr($index_array);

	//array_flip меняет местами ключи и значения
	//если было несколько одинаковых значений
	//учитывается только последнее
	print "Original assoc array";
	myprintr($arr);
	print "Original index array";
	myprintr($index_array);
	print "array_flip<br>\n";
	myprintr(array_flip($arr));

	//array_keys возвращает список ключей массива
	//если указать значение в $searchVal вернутся только
	//ключи которым соответствует $searchVal
	print "array_keys";
	myprintr(array_keys($arr));
	myprintr(array_keys($arr, "Zero"));

	//array_values возвращает список значений массива
	print "array_values";
	myprintr(array_values($arr));

	//in_array возвращает true,если $val находится в $arr
	print "in_array<br>\n";
	print in_array("Zero", $arr);

	//array_count_values подсчитывает сколько раз в массиве
	//встречаются его значения, значение => кол-во
	print "array_count_values<br>\n";
	myprintr(array_count_values($arr));
	
	//array_slice возвращает подмассив начиная с позиции $offset
	//и длиной $len
	print "array_slice";
	myprintr(array_slice($arr, 1, 2));
	
	//array_splice возвращает массив с удаленными или замененными 
	//элементами, находящимися в диапазоне между $offset и $len
	//если последний параметр $replacement не указан, элементы 
	//в этом диапазоне удаляются. фунция модифицирует исходный массив!
	print "array_splice";
	$fruct = ["USA" => "Bananas", "Russia" => "Apple", "China" => "Papaya"];
	array_splice($fruct, 1, count($fruct), ["Japan" => "Pino"]);
	myprintr($fruct);
	
	//array_push добавляет указанные элементы в конец массива
	print "array_push";
	array_push($index_array, "Bread", "Jugo");
	myprintr($index_array);

	//array_pop возвращает последний элемент массива и удаляет из массива
	print "array_pop<br>\n";
	$deleted = array_pop($index_array);
	print "Deleted element - $deleted<br>\n";
	myprintr($index_array);

	//array_unshift добавляет элементы в начало массива
	print "array_unshift";
	array_unshift($index_array, $deleted, "Coffee", ["sorted" => "nothing", "deleted" => "all"]);
	myprintr($index_array);

	//array_shift возвращает и удаляет первый элемент массива
	print "array_shift<br>\n";
	$deleted = array_shift($index_array);
	print "Deleted element - $deleted";
	myprintr($index_array);


    end_html();
?>
