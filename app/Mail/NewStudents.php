<?php

namespace App\Mail;

use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewStudents extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $course_name, $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $course_name, $password)
    {
        $this->user = $user;
        $this->course_name = $course_name;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.new-students')
            ->subject('Nuevo Registro');
            ;
    }
}
