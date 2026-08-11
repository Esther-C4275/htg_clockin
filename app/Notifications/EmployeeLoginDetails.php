<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class EmployeeLoginDetails extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public User $user, public string $password) {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    
public function toMail(object $notifiable): MailMessage
    {

        $setupUrl = URL::temporarySignedRoute(
            'password.setup', 
            now()->addHours(24), 
            ['id' => $this->user->id] 
        );
        return (new MailMessage)
            ->subject('Welcome Aboard')
            ->greeting("Hello {$this->user->name}")
            ->line("Welcome to our app. Your password is $this->password")
            ->action('Click to set password', $setupUrl)
            ->line('Thank you for using our application!');
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
