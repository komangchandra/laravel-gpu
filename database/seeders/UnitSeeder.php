<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['HBP102', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP110', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP106', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP104', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP103', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP108', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP112', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP107', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP113', 'Dump Truck CAMC 6X4', 'HBP', 20],
            ['HBP032', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP034', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP025', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP026', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP027', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP017', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP007', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP035', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP068', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP071', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP041', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP073', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP075', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP012', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP028', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP125', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP126', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP127', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP023', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP011', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP029', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP105', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP101', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP109', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['HBP111', 'Dump Truck CAMC 8X4', 'HBP', 20],
            ['MJR001', 'Dump Truck Hino 500', 'MJR', 20],
            ['MJR002', 'Dump Truck Hino 500', 'MJR', 20],
            ['MJR003', 'Dump Truck Hino 500', 'MJR', 20],
            ['MJR004', 'Dump Truck Hino 500', 'MJR', 20],
            ['DT06', 'Dump Truck LCMG', 'GIP', 20],
            ['DT07', 'Dump Truck LCMG', 'GIP', 20],
            ['DT08', 'Dump Truck LCMG', 'GIP', 20],
            ['DT09', 'Dump Truck LCMG', 'GIP', 20],
            ['DT10', 'Dump Truck LCMG', 'GIP', 20],
            ['DT11', 'Dump Truck LCMG', 'GIP', 20],
            ['DT12', 'Dump Truck LCMG', 'GIP', 20],
            ['DT13', 'Dump Truck LCMG', 'GIP', 20],
            ['DT14', 'Dump Truck LCMG', 'GIP', 20],
            ['DT15', 'Dump Truck LCMG', 'GIP', 20],
            ['RD6101', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6102', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6103', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6104', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6105', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6106', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6107', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
            ['RD6108', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', 20],
        ];

        foreach ($units as $unit) {
            Unit::create([
                'unit_id' => $unit[0],
                'unit_name' => $unit[1],
                'owner' => $unit[2],
                'capacity' => $unit[3],
            ]);
        }
    }
}
