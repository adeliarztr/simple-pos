public function create()
{
    $waktu = now()->format('H:i:s');

    return "Halaman kasir dibuka pukul {$waktu}";
}