<?php

namespace app\api\model;

use think\Model;

class Product extends BaseModel
{
    protected $autoWriteTimestamp = true;
    protected $hidden = [
        'delete_time', 'main_img_id', 'pivot', 'from',
        'create_time', 'update_time'];

    /**
     * 图片属性
     */
    public function imgs()
    {
        return $this->hasMany('Image','product_id','id');
    }

    /**
     * 获取商品详情
     * @param $id
     * @return null | Product
     */
    public static function getProductDetail($id)
    {

        $product = self::with('imgs')
            ->find($id);
        return $product;
    }

    /**
     * 获取商品列表
     * @return null | Product
     */
    public static function getProductlist()
    {
        $shopList = self::select();
        return $shopList;
    }
}