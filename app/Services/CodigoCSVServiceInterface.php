<?php

namespace App\Services;

interface CodigoCSVServiceInterface
{
    public function generarCodigoCSVRedis(): string;
}
