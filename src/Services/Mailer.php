<?php


namespace App\Services;


use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class Mailer
{

    private MailerInterface $mailer;
    /**
     * @var string
     */
    private string $adminEmail;

    public function __construct(string $adminEmail, MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
    }

    public function setMessage($name, $render, $send = false)
    {
        $email = new Email();
        $email->subject( "test")
            ->from($this->adminEmail)
            ->to($this->adminEmail)
            ->html($render);

        if ($send == false) {

            return $email;
        }

        //dd($email);

        $this->sendEmail($email);
    }

    private function sendEmail($email)
    {

            $this->mailer->send($email);

    }

}