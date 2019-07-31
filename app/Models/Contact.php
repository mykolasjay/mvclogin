<?php namespace App\Models;

/*class Contact
{
    public function getContacts()
    {
        //return an array of contacts
        return ['joe', 'bob', 'kerry', 'dave'];
    }
}*/

use System\BaseModel;

/**
 * 
 */
class Contact extends BaseModel
{
	
	public function getContacts()
	{
		# code...
		return $this->db->select('* FROM contacts');
	}
}