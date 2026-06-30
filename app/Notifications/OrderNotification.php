<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class OrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        //
    }


    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    public function toMail(object $notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
            ->subject('Order Berhasil')
            ->line('Checkout berhasil dilakukan.')
            ->line('Terima kasih sudah melakukan pemesanan.');
    }
}