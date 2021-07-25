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
    
    public function name($name){
        return $this->where('name', 'LIKE', "%$name%");
    }

    public function typeId($typeId){
        return $this->where('type_id', $typeId);
    }

    public function author($author){
        return $this->where('author', $author);
    }

    public function translator($translator){
        return $this->where('translator', $translator);
    }

    public function price($price){
        if (is_array($price)){
            return $this->where('price', '>', $price[0])->andWhere('price', '<', $price[1]);
        }
        //return $this->where('translator', $translator);
    }
}