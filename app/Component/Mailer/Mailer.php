<?php
namespace App\Component\Mailer;

use App\Models\Product\Answer;
use App\Models\Product\Order;

class Mailer
{
    public function createAnswer(Answer $answer)
    {
        $order = $answer->order;

        $subject = 'Ответ на заявку';

        ob_start();
        include __DIR__ . '/template.answer.php';
        $body = ob_get_contents();
        ob_end_clean();

        $this->send($subject, $body);
    }

    public function createOrder(Order $order)
    {
        $subject = 'Заявка создана';

        ob_start();
        include __DIR__ . '/template.order.php';
        $body = ob_get_contents();
        ob_end_clean();

        $this->send($subject, $body);
    }

    /**
     * @param string $subject
     * @param string $body
     */
    protected function send($subject, $body)
    {
        try {
            $transport = \Swift_SmtpTransport::newInstance('smtp.yandex.ru', 587, 'tls')
                ->setUsername('zapchasti.club@yandex.ru')
                ->setPassword('127112711271');

            $mailer = \Swift_Mailer::newInstance($transport);

            // Create a message
            $message = \Swift_Message::newInstance($subject)
                ->setFrom(['zapchasti.club@yandex.ru' => 'info'])
                ->setTo($this->getTo())
                ->setBody($body, 'text/html');

            // Send the message
            $mailer->send($message);
        } catch (\Exception $e) {

        }

    }

    /**
     * @return array
     */
    protected function getTo()
    {
        return [
            'dmitriy.rudenskiy@gmail.com',
            'zapchasti.club@yandex.ru'
        ];
    }
}