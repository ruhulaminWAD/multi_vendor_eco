<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            //Brand
            ['guard_name' => 'web', 'name' => 'brand.menu', 'group_name' => 'brand',],
            ['guard_name' => 'web', 'name' => 'brand.list', 'group_name' => 'brand',],
            ['guard_name' => 'web', 'name' => 'brand.add', 'group_name' => 'brand',],
            ['guard_name' => 'web', 'name' => 'brand.edit', 'group_name' => 'brand',],
            ['guard_name' => 'web', 'name' => 'brand.delete', 'group_name' => 'brand',],

            //category
            ['guard_name' => 'web', 'name' => 'cat.menu', 'group_name' => 'category',],
            ['guard_name' => 'web', 'name' => 'category.list', 'group_name' => 'category',],
            ['guard_name' => 'web', 'name' => 'category.add', 'group_name' => 'category',],
            ['guard_name' => 'web', 'name' => 'category.edit', 'group_name' => 'category',],
            ['guard_name' => 'web', 'name' => 'category.delete', 'group_name' => 'brand',],

           //subcategory
           ['guard_name' => 'web', 'name' => 'subcategory.menu', 'group_name' => 'subcategory',],
           ['guard_name' => 'web', 'name' => 'subcategory.list', 'group_name' => 'subcategory',],
           ['guard_name' => 'web', 'name' => 'subcategory.add', 'group_name' => 'subcategory',],
           ['guard_name' => 'web', 'name' => 'subcategory.edit', 'group_name' => 'subcategory',],
           ['guard_name' => 'web', 'name' => 'subcategory.delete', 'group_name' => 'subcategory',],

           //product
           ['guard_name' => 'web', 'name' => 'product.menu', 'group_name' => 'product',],
           ['guard_name' => 'web', 'name' => 'product.list', 'group_name' => 'product',],
           ['guard_name' => 'web', 'name' => 'product.add', 'group_name' => 'product',],
           ['guard_name' => 'web', 'name' => 'product.edit', 'group_name' => 'product',],
           ['guard_name' => 'web', 'name' => 'product.delete', 'group_name' => 'product',],

           //slider
           ['guard_name' => 'web', 'name' => 'slider.menu', 'group_name' => 'slider',],
           ['guard_name' => 'web', 'name' => 'slider.list', 'group_name' => 'slider',],
           ['guard_name' => 'web', 'name' => 'slider.add', 'group_name' => 'slider',],
           ['guard_name' => 'web', 'name' => 'slider.edit', 'group_name' => 'slider',],
           ['guard_name' => 'web', 'name' => 'slider.delete', 'group_name' => 'slider',],

           //ads
           ['guard_name' => 'web', 'name' => 'ads.menu', 'group_name' => 'ads',],
           ['guard_name' => 'web', 'name' => 'ads.list', 'group_name' => 'ads',],
           ['guard_name' => 'web', 'name' => 'ads.add', 'group_name' => 'ads',],
           ['guard_name' => 'web', 'name' => 'ads.edit', 'group_name' => 'ads',],
           ['guard_name' => 'web', 'name' => 'ads.delete', 'group_name' => 'ads',],

           //coupon
           ['guard_name' => 'web', 'name' => 'coupon.menu', 'group_name' => 'coupon',],
           ['guard_name' => 'web', 'name' => 'coupon.list', 'group_name' => 'coupon',],
           ['guard_name' => 'web', 'name' => 'coupon.add', 'group_name' => 'coupon',],
           ['guard_name' => 'web', 'name' => 'coupon.edit', 'group_name' => 'coupon',],
           ['guard_name' => 'web', 'name' => 'coupon.delete', 'group_name' => 'coupon',],

           //area
           ['guard_name' => 'web', 'name' => 'area.menu', 'group_name' => 'area',],

           //vendor
           ['guard_name' => 'web', 'name' => 'vendor.menu', 'group_name' => 'vendor',],

            //order
            ['guard_name' => 'web', 'name' => 'order.menu', 'group_name' => 'order',],
            ['guard_name' => 'web', 'name' => 'order.list', 'group_name' => 'order',],
            ['guard_name' => 'web', 'name' => 'order.edit', 'group_name' => 'order',],
            ['guard_name' => 'web', 'name' => 'order.delete', 'group_name' => 'order',],

            //return
            ['guard_name' => 'web', 'name' => 'return.order.menu', 'group_name' => 'return',],

            //user
            ['guard_name' => 'web', 'name' => 'user.management.menu', 'group_name' => 'user',],

            //review
            ['guard_name' => 'web', 'name' => 'review.menu', 'group_name' => 'review',],

            //blog
            ['guard_name' => 'web', 'name' => 'blog.menu', 'group_name' => 'blog',],

            //site
            ['guard_name' => 'web', 'name' => 'site.menu', 'group_name' => 'site',],

            //role
            ['guard_name' => 'web', 'name' => 'role.permission.menu', 'group_name' => 'role',],

            //admin
            ['guard_name' => 'web', 'name' => 'admin.user.menu', 'group_name' => 'admin',],

            //stock
            ['guard_name' => 'web', 'name' => 'stock.menu', 'group_name' => 'stock',],

        ]);
    }
}

