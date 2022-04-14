<?php
//命名:app\控制器
namespace app\controller;
//调用继承控制器
use app\BaseController;

class Api extends BaseController //Api    AIP接口控制器
{
    private $key;
    public $data = [];
    public $code = 0;
    public $message = '';
    public $where = [];
    public function __construct() // 初始化构造
    {
        //$AdminSystemModel = new \app\model\AdminSystemModel();
        //$this->key = $AdminSystemModel->where('key','key')->value('value');
    }

    // 获取预售结束计时
    public function bdogepiPresaleEnd()
    {
        $AdminSystemModel = new \app\model\AdminSystemModel();
        $bdogepi_presale_end = $AdminSystemModel->where('key','bdogepi_presale_end')->value('value');
        $this->data = intval($bdogepi_presale_end.'000');
        if (!empty($this->data)) //判断是否有数据
        {
            $this->code = 200;
            $this->message = '获取成功';
        } else {
            $this->code = 0;
            $this->message = '暂无数据';
        }
        return json(['data' => $this->data, 'code' => $this->code, 'message' => $this->message]); //返回JSON参数
    }

    //获取预售百分比
    public function bdogepiPresalePercentage()
    {
        $AdminSystemModel = new \app\model\AdminSystemModel();
        $this->data = $AdminSystemModel->where('key','bdogepi_presale_percentage')->value('value');
        if (!empty($this->data)) //判断是否有数据
        {
            $this->code = 200;
            $this->message = '获取成功';
        } else {
            $this->code = 0;
            $this->message = '暂无数据';
        }
        return json(['data' => $this->data, 'code' => $this->code, 'message' => $this->message]); //返回JSON参数
    }

}
