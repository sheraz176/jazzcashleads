<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\LeadSet;


class ImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'leads:file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

       // Retrieve all files in the 'uploads' directory within the 'public' disk
    $files = Storage::disk('public')->files('uploads');

    // Loop through each file in the directory
    foreach ($files as $fileName) {
        // Get the full file path
        $filePath = storage_path('app/public/' . $fileName);

        // Open the file for reading
        if (($fileHandle = fopen($filePath, 'r')) !== false) {
            // Read the header row
            $header = fgetcsv($fileHandle, 5000, ',');

            // Check if the header is valid
            if ($header !== false) {
                // Flag to check if file processed successfully
                $fileProcessed = true;

                // Process each subsequent row
                while (($row = fgetcsv($fileHandle, 5000, ',')) !== false) {
                    // Combine the header with the row to create an associative array
                    $data = array_combine($header, $row);

                    // Validate the data
                    $validator = Validator::make($data, [
                        'MSISDN' => 'required|string',
                        'USER_NAME' => 'nullable|string',
                        'ACTIVITY_TYPE' => 'nullable|string',
                        'INSURANCE_PARTNER' => 'nullable|string',
                    ]);

                    if ($validator->fails()) {
                        // Handle validation failure (e.g., log the error, skip the row, etc.)
                        $fileProcessed = false;
                        break;
                    }

                    // Insert data into the database
                    LeadSet::create([
                        'MSISDN' => $data['MSISDN'],
                        'USER_NAME' => $data['USER_NAME'] ?? null,
                        'ACTIVITY_TYPE' => $data['ACTIVITY_TYPE'] ?? null,
                        'INSURANCE_PARTNER' => $data['INSURANCE_PARTNER'] ?? null,
                    ]);
                }

                // Close the file handle
                fclose($fileHandle);

                // Delete the file if it was processed successfully
                if ($fileProcessed) {
                    Storage::disk('public')->delete($fileName);
                }
            } else {
                // Close the file handle if header is invalid
                fclose($fileHandle);
            }
        }
    }

        // dd($filePath);
        return 0;
    }
}
