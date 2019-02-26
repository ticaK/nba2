<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $team;
    public $comment;
    public function __construct($team, $comment)
    {
        $this->team = $team;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.comment-received', [
            'team' => $this->team,
            'comment' => $this->comment
        ]);

    }
}
