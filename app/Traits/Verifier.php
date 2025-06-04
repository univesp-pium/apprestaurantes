<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\App;

trait Verifier
{
    public function verifyCode(callable $callback)
    {
        DB::beginTransaction();

        try {
            $callback();

            DB::commit();

            return true;
        } catch (\Exception $e) {

            DB::rollBack();

            Log::error('Erro na transação: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);

            if (App::environment('local') && env('APP_DEBUG') == 'true') {
                dd($e);
            }

            return false;
        }

        return true;
    }
}
