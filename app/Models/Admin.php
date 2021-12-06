<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'admin_email', 'admin_password', 'admin_name','admin_phone'
    ];
    protected $primaryKey = 'admin_id';
 	protected $table = 'tbl_admin';
     public static function getMyData(){
        $user = Admin::find();
    }
 	public function roles(){
 	return $this->belongsToMany('App\Models\Roles');
 	}

    public function getAuthPassword(){
        return $this->admin_password;
    }
    public function hasAnyRoles($roles){

        if(is_array($roles)){
            foreach($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }


    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }
    // public function hasAnyRoles($roles){
    //     return null !==$this->roles()->whereIn('name',$roles)->first();
    // }
    // public function hasRoles($role){

    //     return null !==$this->roles()->whereIn('name',$role)->first();
    // }
}
