<?php
//连接mongodb
// $mongo = new Mongo();

//选择数据库（不存在会自动创建一个）

// $db = $mongo->testdb;

//选择集合（类似关系型数据库中的表）

// $collection = $db->testtable;

//添加记录

// $obj = array( "title" => "测试", "author" => "FKBlogc",'name'=>'king' );
// $collection->insert($obj);

// $result = $collection->find();

// foreach ($result as $obj) {
    // echo $obj["author"] . "\n";
// }

$doc = array(
    "name" => "MongoDB",
    "type" => "database",
    "count" => 1,
    "info" => (object)array( "x" => 203,
    "y" => 102),
    "versions" => array("0.9.7", "0.9.8", "0.9.9")
);
$m = new Mongo();
// $collection = $m->foo->bar;
// $collection->insert($doc);

// for($i=0; $i<100; $i++) {
    // $collection->insert(array("i" => $i));
// }

// $obj = $collection->findOne();
// echo $collection->count();
// echo "<br />";
// echo MongoCollection::count();

// var_dump($obj);

// $cursor = $collection->find();
// foreach ($cursor as $id => $value) {
    // echo "$id: ";
    // var_dump( $value );
// }

// $query = array( "i" => 71);
// $cursor = $collection->find( $query );
// while( $cursor->hasNext() ) {
    // var_dump( $cursor->getNext() );
// }

// $query = array( "i" => array('$gt' =>50)); //注意’$gt’两边的单引号
// $cursor = $coll->find( $query );
// while( $cursor->hasNext() ) {
    // var_dump( $cursor->getNext() );
// }



// 选择一个数据库
$db = $m->comedy;
$collection = $db->cartoons;

//添加一个元素
$obj = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
$collection->insert($obj);

//添加另一个元素，使用不同的格式
$obj = array( "title" => "XKCD", "online" => true );
// $collection->insert($obj);

//查询所有的集合
$cursor = $collection->find();

//重复显示结果
// foreach ($cursor as $obj) {
    // echo $obj["title"] . "\n";
// }

// 关闭链接
$m->close();


?>