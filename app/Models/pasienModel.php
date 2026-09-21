<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pasienModel extends Model
{
    //
    protected $table = 'pasien';

    protected $fillable = [
        'user_id',
        'no_ktp',
        'no_hp',
        'no_rm',

    ];

    protected function casts(): array
    {
        return [

            'no_ktp' => 'string',
            'no_hp' => 'string',
        ];
    }

    public function DaftarPoli()
    {
        return $this->hasMany(daftar_poliModel::class, 'id_pasien');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function periksas()
    {
        return $this->hasMany(\App\Models\periksa::class, 'id_pasien');
    }

    public static function generateNoRM()
    {
        $prefix = date('Ym').'-';

        $lastNoRm = static::where('no_rm', 'like', $prefix.'%')
            ->orderByDesc('no_rm')
            ->value('no_rm');

        $next = $lastNoRm ? ((int) substr($lastNoRm, strlen($prefix)) + 1) : 1;

        return $prefix.str_pad((string) $next, 3, '0', STR_PAD_LEFT);
    }

    public static function createWithNoRm(array $attributes)
    {
        $lastException = null;

        for ($attempt = 0; $attempt < 5; $attempt++) {
            $attributes['no_rm'] = static::generateNoRM();

            try {
                return static::create($attributes);
            } catch (\Illuminate\Database\QueryException $e) {
                $lastException = $e;

                if (! str_contains($e->getMessage(), 'no_rm')) {
                    throw $e;
                }

                usleep(random_int(10000, 50000));
            }
        }

        throw $lastException;
    }
}
