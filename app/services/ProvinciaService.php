<?php
namespace App\services;

use App\repositories\ProvinciaRepository;
use Illuminate\Http\Request;

class ProvinciaService extends BaseService{
    public function __construct()
    {
        parent::__construct(new ProvinciaRepository());
        $this->setNameOfExcelExport(null);
        $this->setFileName("");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

    }

}
