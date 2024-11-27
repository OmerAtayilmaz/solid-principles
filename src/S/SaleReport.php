<?php
namespace App\S;

class SaleReport{

    private $saleRepo;

    public function __construct(SaleRepositoryInterface $saleRepo)
    {
        $this->saleRepo = $saleRepo;
    }

    public function getSales()
    {
        //not trying to load manually and other logic shoudln't be here

        return $this->saleRepo->getSales();
    }
    
   /*wrong place to format
    public function format(){
        echo "Total Sales: " . $this->getSales();
    }
    */
    public function format(OutputType $outputType){
        $outputType->format($this->getSales());
    }

    
}