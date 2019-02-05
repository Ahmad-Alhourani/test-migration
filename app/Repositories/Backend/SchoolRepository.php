<?php
namespace App\Repositories\Backend;

use App\Models\School;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class SchoolRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = ["name", "l_name"];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return School::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
