<?php namespace App\Models;
use CodeIgniter\Model;
 
class ProductModel extends Model
{
    protected $table = 'alamat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','hp','email','alamat','kota','propinsi','kodepos'];
}