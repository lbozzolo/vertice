<?php

namespace Amghi\Models;

use Eloquent as Model;

class Liquidacion extends Model
{
    public $table = 'hist_liq';

    public function getFechaLiquidacionAttribute()
    {
        return date_format($this->fecha,"d/m/Y");
    }

}
