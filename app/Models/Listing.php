<?php

namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'Title' => 'Listing One',
                'Description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nostrum minus sequi delectus iste sed facere alias inventore, accusamus molestias doloribus eligendi illo dolorum ullam alias, ex quod numquam maiores repudiandae iusto modi quas. Repudiandae voluptate eveniet similique quam cupiditate cum, labore minus voluptatibus qui quis odit neque vero eos blanditiis omnis suscipit eum, itaque placeat earum? Perferendis fuga doloribus, quae asperiores dolor quam harum vitae.'
            ],
            [
                'id' => 2,
                'Title' => 'Listing Two',
                'Description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nostrum minus sequi delectus iste sed facere alias inventore, accusamus molestias doloribus eligendi illo dolorum ullam alias, ex quod numquam maiores repudiandae iusto modi quas. Repudiandae voluptate eveniet similique quam cupiditate cum, labore minus voluptatibus qui quis odit neque vero eos blanditiis omnis suscipit eum, itaque placeat earum? Perferendis fuga doloribus, quae asperiores dolor quam harum vitae.'
            ],
            [
                'id' => 3,
                'Title' => 'Listing Three',
                'Description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nostrum minus sequi delectus iste sed facere alias inventore, accusamus molestias doloribus eligendi illo dolorum ullam alias, ex quod numquam maiores repudiandae iusto modi quas. Repudiandae voluptate eveniet similique quam cupiditate cum, labore minus voluptatibus qui quis odit neque vero eos blanditiis omnis suscipit eum, itaque placeat earum? Perferendis fuga doloribus, quae asperiores dolor quam harum vitae.'
            ]
            ];
    }

    public static function find($id){
        $Listings = self::all();

        foreach($Listings as $Listing){
            if($Listing['id'] == $id){
                return $Listing;
            }
        }
    }
}