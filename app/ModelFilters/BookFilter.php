<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class BookFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];
    protected $drop_id = false;
    public function bookId($bookId){
        return $this->where('book_id', $bookId);
    }
    
    public function nameBook($name_book){
        return $this->where('name_book', 'LIKE', "%$name_book%");
    }

    public function typeId($typeId){
        return $this->where('books.type_id',$typeId);
    }

    public function nameType($name_type){
        // return $this->where('type_id', $typeId);
        if ($name_type == 'default') {
            return $this->select('books.*','types.*')
                        ->join('types','types.type_id','=','books.type_id');
        } else {
            return $this->select('books.*','types.*')
                        ->join('types','types.type_id','=','books.type_id')
                        ->where('types.name_type','=',"$name_type");
        }
    }

    public function author($author){
        return $this->where('author', $author);
    }

    public function translator($translator){
        return $this->where('translator', $translator);
    }

    public function isbn($isbn){
        return $this->where('isbn', $isbn);
    }


    public function price($price){
        return $this->where('price', $price);
        // if (is_array($price)){
        //     return $this->where('price', '>', $price[0])->andWhere('price', '<', $price[1]);
        // }
        //return $this->where('translator', $translator);
    }

    public function publishing_year($publishing_year){
        return $this->where('publishing_year', $publishing_year);
    }
}