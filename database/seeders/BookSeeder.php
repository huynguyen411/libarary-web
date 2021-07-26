<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    protected $arrInfoBook = [
        [
            "name" => "The Godfather",
            "type_id" => "9",
            "author" => "Mario Puzo",
            "translator" => "huy",
            "price" => "123000",
            "review" => "mafia Italy"
        ],
        [
            "name" => "TMany Lives - Many Times",
            "type_id" => "2",
            "author" => "John Vũ - Nguyên Phong",
            "translator" => "unknown",
            "price" => "104.800",
            "review" => "Atlantis "
        ],
        [
            "name" => "Chủ Nghĩa Khắc Kỷ - Phong Cách Sống Bản Lĩnh Và Bình Thản",
            "type_id" => "3",
            "author" => " William B. Irvine",
            "translator" => "unknown",
            "price" => "96.250",
            "review" => "Kién thức bách khoa"
        ],
        [
            "name" => "Nhà Giả Kim",
            "type_id" => "4",
            "author" => "Paulo Coelho",
            "translator" => "unknown",
            "price" => "54.000",
            "review" => "phiêu lưu"
        ],
        [
            "name" => "Đàn Ông Sao Hỏa Đàn Bà Sao Kim",
            "type_id" => "5",
            "author" => "John Gray",
            "translator" => "unknown",
            "price" => "120.200",
            "review" => "Tư duy - kỹ năng"
        ],
        [
            "name" => "Ba Người Thầy Vĩ Đại",
            "type_id" => "6",
            "author" => "Robin Sharma",
            "translator" => "unknown",
            "price" => "61.900",
            "review" => "Tư duy - kỹ năng"
        ],
        [
            "name" => "Những Giấc Mơ Ở Hiệu Sách Morisaki",
            "type_id" => "7",
            "author" => "Yagisawa Satoshi",
            "translator" => "unknown",
            "price" => "42.500",
            "review" => "Văn học"
        ],
        [
            "name" => "Những Tù Nhân Của Địa Lý",
            "type_id" => "8",
            "author" => "Tim Marshall",
            "translator" => "unknown",
            "price" => "154.900",
            "review" => "tình hình thế giới"
        ],
        [
            "name" => "Yêu - Being In Love",
            "type_id" => "9",
            "author" => "Osho",
            "translator" => "unknown",
            "price" => "104.900",
            "review" => "yêu"
        ],

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {   
        //
        foreach ($this->arrInfoBook as  $value) {
            DB::table('books')->insert([
                'name_book' => $value["name"],
                "type_id" => $value["type_id"],
                "author" => $value["author"],
                "translator" => $value["translator"],
                "price" => $value["price"],
                "review" => $value["review"]
            ]);
        }
    }
}
