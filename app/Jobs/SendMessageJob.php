<?php

  

namespace App\Jobs;

  

use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueueNow;

use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Queue\SerializesModels;

use App\Events\MessageSent;

use App\User;
use App\Message;

  

class SendEmailJob implements ShouldQueueNow

{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  
     /**
     * @var User
     */
    protected $user;

    /**
     * Message details
     *
     * @var Message
     */
    protected $message;
    public $detials;
 
  

    /**

     * Create a new job instance.

     *

     * @return void

     */

    public function __construct(User $user,Message $message,$detials)

    {

        $this->user = $user;
        $this->message = $message;
        $this->detials = $detials;

    }

  

    /**

     * Execute the job.

     *

     * @return void

     */

    public function handle()

    {

        $user = new MessageSent();
        $message = new MessageSent();

        Events::to($this->details['user'])->send($user);
        Events::to($this->details['message'])->send($message);

    }

}
