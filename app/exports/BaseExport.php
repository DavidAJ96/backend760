<?php

namespace App\Exports;

use App\Http\DTOs\Alumno\AlumnoCollection;
use App\Http\DTOs\BaseResourceCollection;
use App\Models\Alumno;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Concerns\WithTitle;

class BaseExport implements FromView,WithEvents,WithTitle
{
    private BaseResourceCollection $baseResourceCollection;
    private string $rangoHeader = 'A2:I2',$viewPDF,$viewExcel,$reportTitle;
    private array $columnsWith =[];
    public function __construct(BaseResourceCollection $baseResourceCollection)
    {
        $this->baseResourceCollection = $baseResourceCollection;
    }

    public function view(): View
    {
        return View($this->getViewExcel(),['registros'=>$this->collection(),'type'=>'excel','report_title'=>$this->getReportTitle()]);
    }

    public function getPDF($fileName){
        return PDF::loadView('exports.pdf.base_pdf',['registros'=>$this->collection(),'type'=>'pdf','viewToExport'=>$this->getViewExcel(),'report_title'=>$this->getReportTitle()])->setOptions(['defaultFont' => 'sans-serif'])->download($fileName.'.pdf');
     }

    public function title(): string
    {
        return $this->getReportTitle();
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  $this->baseResourceCollection;
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:W900')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getDelegate()->getStyle($this->getRangoHeader())->getFill()
                ->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('2F75B5');
                $event->sheet->getDelegate()->getStyle($this->getRangoHeader())->getFont()->getColor()->setARGB('FFFFFF');
                $event->sheet->getDelegate()->getStyle($this->getRangoHeader())->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle($this->getRangoHeader())->getFont()->setBold(true)->setItalic(true);

                foreach ($this->getColumnsWith() as $key => $val){
                    $event->sheet->getColumnDimension($key)->setAutoSize(false);
                    $event->sheet->getDelegate()->getColumnDimension($key)->setWidth($val);
                }
                $numero = 3;
                $data = $event->sheet->getDelegate()->toArray();
                while($numero < (count($data))){
                    $event->sheet->getDelegate()->getRowDimension($numero)->setRowHeight(30);

                    if(empty($data[$numero][3])){
                       break;
                    }
                    $numero++;



                }




            },
        ];
    }



    /**
     * Get the value of rangoHeader
     */
    public function getRangoHeader()
    {
        return $this->rangoHeader;
    }

    /**
     * Set the value of rangoHeader
     *
     * @return  self
     */
    public function setRangoHeader($rangoHeader)
    {
        $this->rangoHeader = $rangoHeader;

        return $this;
    }

    /**
     * Get the value of viewPDF
     */
    public function getViewPDF()
    {
        return $this->viewPDF;
    }

    /**
     * Set the value of viewPDF
     *
     * @return  self
     */
    public function setViewPDF($viewPDF)
    {
        $this->viewPDF = $viewPDF;

        return $this;
    }

    /**
     * Get the value of viewExcel
     */
    public function getViewExcel()
    {
        return $this->viewExcel;
    }

    /**
     * Set the value of viewExcel
     *
     * @return  self
     */
    public function setViewExcel($viewExcel)
    {
        $this->viewExcel = $viewExcel;

        return $this;
    }

    /**
     * Get the value of columnsWith
     */
    public function getColumnsWith()
    {
        return $this->columnsWith;
    }

    /**
     * Set the value of columnsWith
     *
     * @return  self
     */
    public function setColumnsWith($columnsWith)
    {
        $this->columnsWith = $columnsWith;

        return $this;
    }

    /**
     * Get the value of reportTitle
     */
    public function getReportTitle()
    {
        return $this->reportTitle;
    }

    /**
     * Set the value of reportTitle
     *
     * @return  self
     */
    public function setReportTitle($reportTitle)
    {
        $this->reportTitle = $reportTitle;

        return $this;
    }
}
