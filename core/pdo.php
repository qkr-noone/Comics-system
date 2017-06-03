<?php

class PdoClass {

    // private
    // public
    // protected

    // 哪些数据库的属性
    //数据库的名字
    //数据库的地址
    //数据库连接
    private  $link;//本类可以用

    function __construct(){
        // 数据库的连接

        $this->link= new PDO("mysql:dbhost=localhost;dbname=comics;charset=utf8","root","");
        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    //执行一条语句：包括删除、更新
    public function query($sql)
    {
        $this->link->exec($sql);
    }


    /**
     * 添加的函数
     * @param string $table  表名
     * @param array $data_a 添加的数组（键值对）
     */
    public function add($table,$data_a)
    {

// $data_a=array(
// 		'title'=>'515嘿嘿嘿',
// 		'content'=>'啦啦啦啦啦'
// 	);

        // 怎么获取一个数组的键
        // array_keys($data_a);
        // 怎么把数组用,进行连接，然后变成字符串
        $col_str=implode(",", array_keys($data_a));



        // 怎么获取一个数组的值
        $val_ar=array_values($data_a);

        // str_replace(search, replace, subject)

        /*...................重点...................*/
        
        /*在这里如果有特殊符号  可以在这里替换了  使用echo 输出  查看情况   */
        foreach ($val_ar as $key => $value) {
            $val_ar[$key]="'".str_replace(array("习近平","黄赌毒","'"),array("习大大","你猜猜","\'"),$value)."'";
        }
        // 怎么把数组用,进行连接，然后变成字符串
        $val_str=implode(",", $val_ar);

        // $col_str="title,content";
        // $val_str="'515嘿嘿嘿','啦啦啦啦啦'";

        // insert into bb_blog (title,content) values('515嘿嘿嘿','啦啦啦啦啦')
        // insert into bb_blog ($col_str) values($val_str)
        $sql="insert into $table ($col_str) values($val_str) ";

        $this->query($sql);
    }

    /**
     * 删除操作，删除一个、删除多个
     * @param  string $table      表名
     * @param  array $where_data 删除的条件
     */
    public function delete($table,$where_data,$search_type="")
    {
        // 单个删除的条件：array('id'=>1,'create_time'=>3423423)

        // 批量删除时候的条件： array('id'=>array(19,18))
        $where_sql='';
        $and_str="";


// select * from bb_blog where title like "%黄%" or title like "%毒%"  or title like "%赌%"
        foreach ($where_data as $key => $value) {

            if (is_array($value)) {//批量删除
                if (empty($search_type)) {
                    $ids=implode(",", $value);//漏洞
                    $where_sql.=$and_str." $key in ($ids) ";
                }elseif($search_type=='like'){
                    // array('title'=>array('黄','赌','毒'))
                    // 如果这一个条件值是数组的话，我们就遍历
                    if (is_array($value)) {
                        $or_str="";
                        foreach ($value as $k => $val) {
                            $where_sql.=$or_str. $key.' like "%'.$val.'%"';//   title like "%黄%" or  title like "%毒%"
                            $or_str=" or ";
                        }
                    }

                }


            }else{
                $where_sql.=$and_str." $key = '$value' ";
            }

            $and_str=" and ";
        }
        // delete from bb_blog where id in(19,18)
        // delete from bb_blog where id = 19

        $sql="delete from $table where $where_sql";

        $this->query($sql);
    }
    /**
     * 获取所有的信息
     * @param  [string] $sql [sql语句]
     * @return [array]      [数据的数组]
     */
    public function getAll($sql)
    {
        $pstate=$this->link->prepare($sql);
        $pstate->execute();

        return $pstate->fetchAll();
    }
    /**
     * 获取一条记录的操作
     * @param  [string] $sql [sql语句]
     * @return [array]      [数据的数组]
     */
    public function getInfo($sql)
    {
        $pstate=$this->link->prepare($sql);
        $pstate->execute();

        return $pstate->fetch();
    }
    /**
     * 查询操作，查询多个
     * @param  string $table      表名
     * @param  array $where_data 查询的条件
     * @param  string $order_str 排序   例子： id desc
     */
    public function select($table,$where_data="",$order_str="")
    {
        $where_sql = '';
        $and_str="";
        if (!empty($where_data)) {

            $where_sql=' where ';
            foreach ($where_data as $key => $value) {
                $where_sql.=$and_str." $key = '$value' ";

                $and_str=" and ";
            }
        }
        $order_sql="";
        // 如果有排序
        if (!empty($order_str)) {
            $order_sql=" order by $order_str";
        }

        // select * from bb_blog order by id desc
        $sql="select * from $table  $where_sql $order_sql";

        return $this->getAll($sql);
    }
    /**
     * 查询操作，查询一个
     * @param  string $table      表名
     * @param  array $where_data 查询的条件
     */
    public function find($table,$where_data)
    {
        $where_sql='';
        $and_str="";
        foreach ($where_data as $key => $value) {

            $where_sql.=$and_str." $key = '$value' ";

            $and_str=" and ";
        }

        $sql="select * from $table where $where_sql";

        return $this->getInfo($sql);
    }

    /**
     * 更新数据的方法
     * @param  string $table      表名
     * @param  array $where_data 条件数据
     * @param  array $col_data   列的数据
     */
    public function update($table,$where_data,$col_data="")
    {
        $where_sql="";
        // $where_data=array('id'=>3)
        // $col_data=array("title"=>'5月15，月儿圆',"content"=>"sdfsdf")
        foreach ($where_data as $key => $value) {
            $where_sql.="$key = '$value'";
        }

        // 生成col列的字符串
        $col_str="";
        $doudou_str="";
        foreach ($col_data as $key => $value) {
            $col_str.=$doudou_str."$key = '$value'";

            $doudou_str=",";
        }

        $sql="update $table set $col_str where $where_sql";
        $this->query($sql);
    }
}
?>