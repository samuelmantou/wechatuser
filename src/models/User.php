<?php namespace Wechat\User;
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 2/22/15
 * Time: 12:29 AM
 */

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'users';

    public function Tttt(){
        $this->account = "aaa";
        $this->password = "asdf";
        $this->save();
    }
}