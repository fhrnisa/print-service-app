<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $service = Service::updateOrCreate(
            ['slug' => 'print-dokumen'],
            ['name' => 'Print Dokumen', 'type' => 'document_print', 'is_active' => true]
        );

        $service->fields()->updateOrCreate(
            ['field_name' => 'file_dokumen'],
            ['field_type' => 'file', 'is_required' => true, 'sort_order' => 0]
        );

        $service->fields()->updateOrCreate(
            ['field_name' => 'paper_size'],
            ['field_type' => 'select', 'options' => ['A4', 'A3', 'F4'], 'is_required' => true, 'sort_order' => 1]
        );
    }
}