<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;

class SendMessage extends Mailable
{
    public $emailData;

    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    public function build()
    {
        return $this->from('quymanhme1@gmail.com', 'quy le')
                    ->subject($this->emailData['subject'])
                    ->view('emails.sendMessage') // Đây là tên view email, bạn cần tạo tệp view tương ứng
                    ->with(['emailData' => $this->emailData]);
    }
}
