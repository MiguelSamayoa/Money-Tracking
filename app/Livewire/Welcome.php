<?php

namespace App\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class Welcome extends Component
{
    public function render()
    {
        $lineChartModel = (new LineChartModel())
            ->setTitle('Historial de Ingresos')
            ->setAnimated(true)
            ->addPoint('Enero', 950)
            ->addPoint('Febrero', 700)
            ->addPoint('Marzo', 1500)
            ->addPoint('Abril', 1100)
            ->addPoint('Mayo', 1500)
            ->addPoint('Junio', 800)
            ->addPoint('Julio', 1750)
            ->addPoint('Agosto', 650)
            ->addPoint('Septiembre', 1250)
            ->addPoint('Octubre', 1050)
            ->addPoint('Noviembre', 1750)
            ->addPoint('Diciembre', 2000)
            ->withoutLegend()
            ->setYAxisVisible(false);

            $expenseRecordPieChartModel = (new PieChartModel())
            ->setTitle('Gastos')
            ->asPie()
            ->addSlice('Combustible', 25, '#FF0000') // Rojo
            ->addSlice('Alimentación', 55, '#0000FF') // Azul
            ->addSlice('Transporte', 32, '#6A5ACD') // SlateBlue
            ->addSlice('Vivienda', 150, '#008000') // Verde
            ->setOpacity(1)
            ->withoutLegend();


            $incomesRecordAreaChartModel = (new LineChartModel())
                ->setTitle('Ingresos y Gastos Mensuales')
                ->setAnimated(true)
                ->setColors(['#4CAF50', '#F44336']) // Verde para Ingresos, Rojo para Gastos
                ->multiLine()
                ->addSeriesPoint('Ingresos', 'Enero', 5000)
                ->addSeriesPoint('Ingresos', 'Febrero', 7000)
                ->addSeriesPoint('Ingresos', 'Marzo', 8000)
                ->addSeriesPoint('Ingresos', 'Abril', 5000)
                ->addSeriesPoint('Ingresos', 'Mayo', 7000)
                ->addSeriesPoint('Ingresos', 'Junio', 8000)
                ->addSeriesPoint('Ingresos', 'Julio', 5000)
                ->addSeriesPoint('Ingresos', 'Agosto', 7000)
                ->addSeriesPoint('Ingresos', 'Septiembre', 8000)
                ->addSeriesPoint('Ingresos', 'Octubre', 5000)
                ->addSeriesPoint('Ingresos', 'Noviembre', 7000)
                ->addSeriesPoint('Ingresos', 'Diciembre', 8000)
                ->addSeriesPoint('Gastos', 'Enero', 2500)
                ->addSeriesPoint('Gastos', 'Febrero', 6000)
                ->addSeriesPoint('Gastos', 'Marzo', 4250)
                ->addSeriesPoint('Gastos', 'Abril', 4500)
                ->addSeriesPoint('Gastos', 'Mayo', 6000)
                ->addSeriesPoint('Gastos', 'Junio', 4250)
                ->addSeriesPoint('Gastos', 'Julio', 3750)
                ->addSeriesPoint('Gastos', 'Agosto', 2900)
                ->addSeriesPoint('Gastos', 'Septiembre', 5980)
                ->addSeriesPoint('Gastos', 'Octubre', 6780)
                ->addSeriesPoint('Gastos', 'Noviembre', 6000)
                ->addSeriesPoint('Gastos', 'Diciembre', 4250);

        return view('livewire.welcome', [
            'lineChartModel' => $lineChartModel,
            'expenseRecordPieChartModel' => $expenseRecordPieChartModel,
            'incomesRecordAreaChartModel' => $incomesRecordAreaChartModel,
        ]);
    }
}
