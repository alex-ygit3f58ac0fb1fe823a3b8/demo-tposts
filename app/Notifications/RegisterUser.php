<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

use App\User;

class RegisterUser extends Notification
{
	use Queueable;
	
	private $user;
	private $new_password;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct( User $user, $new_password )
	{
		$this->user = $user;
		$this->new_password = $new_password;
	}

	/**
	 * Get the notification's delivery channels.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function via($notifiable)
	{
		return ['mail'];
	}

	/**
	 * Get the mail representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return \Illuminate\Notifications\Messages\MailMessage
	 */
	public function toMail($notifiable)
	{
		return (new MailMessage)->view(
			'mail.register', [
				'email' => $this->user->email,
				'password' => $this->new_password
			]
		);
	}	
}
