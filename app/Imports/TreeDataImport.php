<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use App\Services\FrameDetailService;
use Maatwebsite\Excel\Events\AfterImport;

class TreeDataImport implements ToCollection, ShouldQueue, WithChunkReading
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public static function afterImport(AfterImport $event)
    {
//        Artisan::call('delete:unmatchedRecords');
        return DB::table('frame_details')->where('process_status', '=', 0)->update(['deleted_at' => Carbon::now()]);
        Log::info('After import excel file');
    }

    public function chunkSize(): int
    {
        return 300;
    }

    public function startRow(): int
    {
        Log::info('Start row excel file');
        return 2;
    }
}
