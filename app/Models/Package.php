<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }
    public function package_services()
    {
        return $this->hasMany(Package_services::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function history()
    {
        return $this->belongsTo(History::class);
    }

}
