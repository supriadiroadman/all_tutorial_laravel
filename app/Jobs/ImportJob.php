<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Imports\ProductsImportQueue;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }


    public function handle()
    {
        Excel::import(new ProductsImportQueue, 'public/' . $this->file); //MENJALANKAN PROSES IMPORT
        unlink(storage_path('app/public/' . $this->file)); //MENGHAPUS FILE EXCEL YANG TELAH DI-UPLOAD
    }
    // Pada .env ganti
    // QUEUE_CONNECTION=sync
    // Menjadi
    // QUEUE_CONNECTION=database
}
