<?php

namespace App\Http\Controllers;

use App\Models\Product;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkPerHari=Product::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->groupBy('date')
            ->orderBy('date','asc')
            ->get();

        $dates=[];
        $totals=[];
        foreach ($produkPerHari as $item){
            $dates[]=Carbon::parse($item->date)->format('Y-m-d');
            $totals[]=$item->total;
        }
        $chart=LarapexChart::barChart()
            ->setTitle('Produk Ditambahkan Per Hari')
            ->setSubtitle('Data Penambahan Produk Harian')
            ->addData('Jumlah Produk',$totals)
            ->setXAxis($dates);
        $data=[
            'totalProducts'=>Product::count(),
            'salesToday'=>130,
            'totalRevenue'=>'Rp 75.000.000',
            'registeredUsers'=>350,
            'chart'=>$chart
        ];
        return view('component.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
