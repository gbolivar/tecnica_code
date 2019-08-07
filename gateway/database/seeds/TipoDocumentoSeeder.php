<?php

use Illuminate\Database\Seeder;
use App\TipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documento = new TipoDocumento();
		$documento->nombre = 'DNI';
		$documento->save();

        $documento = new TipoDocumento();
		$documento->nombre = 'CUIL';
		$documento->save();

        $documento = new TipoDocumento();
		$documento->nombre = 'CUIT';
		$documento->save();
    }
}
