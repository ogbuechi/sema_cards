<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

class Card extends Model
{

//    use SoftDeletes;


    protected $table = 'cards';

    protected $primaryKey = 'id';

    protected $appends = ['update_url','img','edit_url','view_url','p_name','pay_status'];

    protected $fillable = [
                  'full_name',
                  'gender','online',
                  'cpr_no',
                  'mobile',
                  'mobile2',
                  'phone',
                  'price',
                  'address',
                  'card_type',
                  'payment_method',
                  'contact_method',
                  'package_type',
                  'comment',
                  'period',
                  'agent_id',
                  'status',
                  'issue_date',
                  'expiry_date',
                  'first_issue_date','paid','photo','imported',
                  'email',
                  'card_id',
                  'online',
                  'is_parent',
                  'policy_no'
              ];

    protected $dates = [
               'deleted_at'
           ];

    protected $casts = [
        'is_parent' => 'boolean',
        'paid' => 'boolean'
    ];


    public function agent()
    {
        return $this->belongsTo(User::class,'agent_id');
    }

    public function card()
    {
        return $this->belongsTo(Card::class,'card_id');
    }

    public function package()
    {
        return $this->belongsTo(PackageType::class,'package_type');
    }

    public function getPhotoAttribute($value)
    {
//        if(!$value){
//            return '/images/avatar.jpeg';
//        }
        return $value;
    }
    public function getPNameAttribute()
    {
        if($this->package){
            return optional($this->package)->name;
        }else{
            return 'none';
        }
    }

    public function getPayStatusAttribute()
    {
        if($this->paid){
            return 'Paid';
        }else{
            return 'Not paid';
        }
    }

    public function getImgAttribute()
    {
        if(!$this->photo){
            return '/images/avatar.jpeg';
        }
        return $this->photo;
    }

    public function getUpdateUrlAttribute()
    {
        return route('cards.update', $this->id);
    }

    public function getFullNameAttribute($value){
        return Str::limit($value, 33,'');
    }

    public function getEditUrlAttribute()
    {
        return route('cards.edit', $this->id);
    }

    public function getViewUrlAttribute()
    {
        return route('cards', $this->policy_no);
    }

    /**
     * Get the card for this model.
     *
     * @return App\Models\Card
     */
//    public function card()
//    {
//        return $this->belongsTo('App\Models\Card','card_id');
//    }
    public function cards()
    {
        return $this->hasMany(Card::class,'card_id');
    }

    /**
     * Set the issue_date.
     *
     * @param  string  $value
     * @return void
     */
//    public function setIssueDateAttribute($value)
//    {
//        $this->attributes['issue_date'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
//    }
//
//    /**
//     * Set the expiry_date.
//     *
//     * @param  string  $value
//     * @return void
//     */
//    public function setExpiryDateAttribute($value)
//    {
//        $this->attributes['expiry_date'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
//    }
//
//    /**
//     * Set the first_issue_date.
//     *
//     * @param  string  $value
//     * @return void
//     */
//    public function setFirstIssueDateAttribute($value)
//    {
//        $this->attributes['first_issue_date'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
//    }
//
//    /**
//     * Get issue_date in array format
//     *
//     * @param  string  $value
//     * @return array
//     */
    public function getIssueDateAttribute($value)
    {
        $date = $this->validateDate($value) ? new Carbon($value) : Carbon::now();
        return $date->format('Y-m-d');
    }

    function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }


    public function getExpiryDateAttribute($value)
    {
        $date = new Carbon($value);
        return $date->format('Y-m-d');
    }
//
//    /**
//     * Get first_issue_date in array format
//     *
//     * @param  string  $value
//     * @return array
//     */
//    public function getFirstIssueDateAttribute($value)
//    {
//        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y');
//    }



    public function setIssueDateAttribute($value)
    {
        $this->attributes['issue_date'] =  Carbon::parse($value);
    }

//    public function setFirstIssueDateAttribute($value)
//    {
//        $this->attributes['first_issue_date'] =  Carbon::parse($value);
//    }
//
//    public function setExpiryDateAttribute($value)
//    {
//        $this->attributes['first_issue_date'] =  Carbon::parse($value);
//    }

}
