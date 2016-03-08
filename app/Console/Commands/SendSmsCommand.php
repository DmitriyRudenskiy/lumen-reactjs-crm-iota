<?php
namespace App\Console\Commands;


use App\Component\Sms;
use App\Models\Notification\AnswerSend;
use App\Models\Notification\Phone;
use Illuminate\Console\Command;

class SendSmsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sms:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parser history fo site sms4b';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $sms  = new Sms();
        $answerSend = AnswerSend::get();

        if ($answerSend === null) {
            return;
        }

        $guid = $sms->send(
            $answerSend->phone->number,
            $answerSend->text
        );

        $answerSend->guid = $guid;
        $answerSend->is_send = 1;
        $answerSend->save();
    }
}