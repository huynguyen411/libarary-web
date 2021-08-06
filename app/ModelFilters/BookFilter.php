<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use App\Models\Type;

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
    public function bookId($bookId)
    {
        return $this->where('book_id', $bookId);
    }

    public function nameBook($name_book)
    {
        return $this->where('name_book', 'LIKE', "%$name_book%");
    }

    public function typeId($typeIds)
    {
        return $this->whereIn('type_id', $typeIds);
    }

    public function nameType($name_type)
    {
        return $this->related('type', 'name', 'like', "%$name_type%");
    }

    public function author($author)
    {
        return $this->where('author', 'like', "%$author%");
    }

    public function translator($translator)
    {
        return $this->where('translator', 'like', "%$translator%");
    }

    public function isbn($isbn)
    {
        return $this->where('isbn', "like", "%$isbn%");
    }


    public function price($price)
    {
        if (is_array($price)) {
            return $this->where([['price', '>', $price[0]], ['price', '<', $price[1]]]);
        }

        return $this->where('price', $price);
    }

    public function publishingYear($publishing_year)
    {
        return $this->whereYear('publication_date', $publishing_year);
    }

    public function countryName($countryName)
    {
        return $this->related('country', 'country_name', 'like', "%$countryName%");
    }

    public function codeDDC($codeDDC)
    {
        $type = Type::where('code', $codeDDC)->first();
        if ($type->level == 3) {
            return $this->related('type', 'code', $codeDDC);
        }

        if ($type->level == 2) {
            $typeId = $type->type_id;
            return $this->related('type', 'parent_id', $typeId);
        }
        if ($type->level == 1) {
            $arrID = [];
            $typeIdLv1 = $type->type_id;

            $arrTypeLv2 = Type::where([['parent_id', $typeIdLv1], ['level', 2]])->get();
            foreach ($arrTypeLv2 as $key => $value) {
                array_push($arrID, $value->type_id);
            }

            $this->related('type', function ($query) use ($arrID) {
                global $typeIdLv1;
                return $query->where([['parent_id', $arrID]]);
            });
        }
    }
}