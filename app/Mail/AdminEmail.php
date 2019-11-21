<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $phone;
    public $type;
    public $gender;
    public $teens;
    public $diagnosis;
    public $diagonsis_condition;
    public $active;
    public $describe;
    public $body_type;
    public $doctor;
    public $doctor_name;
    public $qualification;
    public $service_time;
    public $business_name;
    public $typical_patients;
    public $login;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->firstname = $data['first_name'];
        $this->lastname = $data['last_name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->type = $data['type'];
        $this->phone = isset($data['phone']) ? $data['phone'] : '';
        $this->gender = isset($data['gender']) ? $data['gender'] : '';
        $this->teens = isset($data['teens']) ? $data['teens'] : '';
        $this->diagnosis = isset($data['diagnosis']) ? $data['diagnosis'] : '';
        $this->diagonsis_condition = isset($data['diagonsis_condition']) ? $data['diagonsis_condition'] : '';
        $this->active = isset($data['active']) ? $data['active'] : '';
        $this->describe = isset($data['describe']) ? $data['describe'] : '';
        $this->body_type = isset($data['body_type']) ? $data['body_type'] : '';
        $this->doctor = isset($data['doctor']) ? $data['doctor'] : '';
        $this->doctor_name = isset($data['doctor_name']) ? $data['doctor_name'] : '';
        $this->qualification = isset($data['qualification']) ? $data['qualification'] : '';
        $this->service_time = isset($data['service_time']) ? $data['service_time'] : '';
        $this->business_name = isset($data['business_name']) ? $data['business_name'] : '';
        $this->typical_patients = isset($data['typical_patients']) ? $data['typical_patients'] : '';
        $this->login = $data['login'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.admin');
    }
}
