<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static limit(int $int)
 * @method static get()
 * @method static where(string $string, string $string1)
 * @method static whereIn(string $string, array $array)
 * @method static paginate(int $int)
 * @method static find(int $int)
 * @method static orderBy(string $string, string $string1)
 * @method static select(string $string)
 * @method static min(string $string)
 * @method static max(string $string)
 */
class LotsItemCopart extends Model
{
    use HasFactory;

//    protected $table = 'tesss';
    protected $table = 'lots_item_copart';

    protected $guarded = [];
    public $timestamps = false;


    public function make(): HasOne
    {
        return $this->hasOne(LotMakes::class, 'id', 'make_id');
    }

    public function body(): HasOne
    {
        return $this->hasOne(LotBody::class, 'id', 'body_id');
    }

    public function model(): HasOne
    {
        return $this->hasOne(LotModels::class, 'id', 'model_id');
    }

    public function damage(): HasOne
    {
        return $this->hasOne(LotDamage::class, 'id', "damage_id");
    }
    public function damage2(): HasOne
    {
        return $this->hasOne(LotDamage::class, 'id', "damage2_id");
    }

    public function attachments(): HasOne
    {
        return $this->hasOne(Attachments::class, 'id', "id");
    }

    public function runDrive()
    {
        return $this->hasOne(LotRunsDrive::class, 'id', "runs_drive_id");
    }

    public function transsmision()
    {
        return $this->hasOne(LotTransmission::class, 'id', "transmission_id");
    }

    public function color()
    {
        return $this->hasOne(LotColor::class, 'id', "color_id");
    }

    public function drive()
    {
        return $this->hasOne(LotDrive::class, 'id', "drive_id");
    }

    public function fuel()
    {
        return $this->hasOne(LotFuel::class, 'id', "fuel_id");
    }
    public function saleStatus()
    {
        return $this->hasOne(LotSaleStatus::class, 'id', "sale_status_id");
    }
//    public function saleStatus()
//    {
//        return $this->hasOne(LotSaleStatus::class, 'id', "sale_status_id");
//    }

}
