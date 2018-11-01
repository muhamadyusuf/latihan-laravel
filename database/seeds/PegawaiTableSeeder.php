<?php

use Illuminate\Database\Seeder;
use App\Models\Opd;
use App\Models\Rumpun;
use App\Models\Unitkerja;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rumpuns = [
            [
                'n_rumpun' => 'ASDA 1',
                'ket' => 'ASISTEN TATA PEMERINTAHAN'
            ],
            [
                'n_rumpun' => 'ASDA 2',
                'ket' => 'ASISTEN EKONOMI DAN PENGEMBANGAN'
            ],
            [
                'n_rumpun' => 'ASDA 3',
                'ket' => 'ASISITEN ADMINISTRASI UMUM DAN KESEJAHTERAAN RAKYAT'
            ],
        ];
        foreach ($rumpuns as $rumpun) {
            Rumpun::create([
                'n_rumpun' => $rumpun['n_rumpun'],
                'ket' => $rumpun['ket']
            ]);
        }

        $opds = [
            [
                'kode' => '110101',
                'n_opd' => 'DINAS PENDIDIKAN DAN KEBUDAYAAN',
                'initial' => 'DINDIK',
                'rumpun_id' => 3
            ],
            [
                'kode' => '110201',
                'n_opd' => 'DINAS KESEHATAN',
                'initial' => 'DINKES',
                'rumpun_id' => 3
            ],
            [
                'kode' => '110102',
                'n_opd' => 'RUMAH SAKIT UMUMN',
                'initial' => 'RSUD',
                'rumpun_id' => 1
            ]
        ];
        foreach ($opds as $opd) {
            Opd::create([
                'kode' => $satker['kode'],
                'n_opd' => $satker['n_opd'],
                'initial' => $satker['initial'],
                'rumpun_id' => $satker['rumpun_id']
            ]);
        }

        $unitkerjas = [
            '-',
            'Kepala',
            'Sekretariat',
            'Kepala Bidang',
            'Kasi',
            'Staf'
        ];
        foreach ($unitkerjas as $unitkerja) {
            Unitkerja::create([
                'n_unitkerja' => $unitkerja,
                'opd_id' => 1
            ]);
        }
    }
}
