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
            ['HBP102', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP110', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP106', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP104', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP103', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP108', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP112', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP107', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP113', 'Dump Truck CAMC 6X4', 'HBP', '20'],
            ['HBP032', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP034', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP025', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP026', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP027', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP017', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP007', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP035', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP068', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP071', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP041', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP073', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP075', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP012', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP028', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP125', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP126', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP127', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP023', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP011', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP029', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP105', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP101', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP109', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['HBP111', 'Dump Truck CAMC 8X4', 'HBP', '20'],
            ['MJR001', 'Dump Truck Hino 500', 'MJR', '20'],
            ['MJR002', 'Dump Truck Hino 500', 'MJR', '20'],
            ['MJR003', 'Dump Truck Hino 500', 'MJR', '20'],
            ['MJR004', 'Dump Truck Hino 500', 'MJR', '20'],
            ['DT06', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT07', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT08', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT09', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT10', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT11', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT12', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT13', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT14', 'Dump Truck LCMG', 'GIP', '20'],
            ['DT15', 'Dump Truck LCMG', 'GIP', '20'],
            ['RD6101', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6102', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6103', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6104', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6105', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6106', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6107', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['RD6108', 'Dump Truck Wide Body XCMG XGA5902D3T', 'KMP', '20'],
            ['LV 01 - BM 1164 AAF', 'Mitsubishi Pajero GLX', 'SEDAYU', '20'],
            ['LV 02 - BM 8237 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 03 - BM 8235 QJ', 'Mitsubishi Triton SC HDX', 'SEDAYU', '20'],
            ['LV 04 - BM 8233 QJ', 'Mitsubishi Triton SC HDX', 'SEDAYU', '20'],
            ['LV 05 - BM 8243 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 06 - BM 8244 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 07 - BM 8240 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 08 - BM 8239 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 12 - BM 8238 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 13 - BM 8247 QJ', 'Isuzu NLR Mikrobus', 'SEDAYU', '20'],
            ['LV 14 - BM 8246 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 15 - BM 8245 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 16 - BM 8242 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 17 - BM 8241 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 18 - BM 8232 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 19 - BM 8231 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 20 - BM 8230 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 21 - BM 8229 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 22 - BM 8228 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 23 - BM 8227 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 24 - BM 8226 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 25 - BM 8225 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 26 - BM 8602 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 27 - BM 8692 QJ', 'Mitsubishi Triton DC GLS', 'SEDAYU', '20'],
            ['LV 28 - BM 8489 QJ', 'Mitsubishi Triton DC HDX', 'SEDAYU', '20'],


        ];

        foreach ($units as $unit) {
            Unit::create([
                'unit_id' => $unit[0],
                'unit_name' => $unit[1],
                'owner' => $unit[2],
                'area' => $unit[3],
            ]);
        }
    }
}
