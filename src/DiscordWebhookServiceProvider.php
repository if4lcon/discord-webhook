<?php

namespace NotificationChannels\Webhook;

use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\ServiceProvider;

class DiscordWebhookServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(ChannelManager::class)->extend('discord-webhook', function () {
            return $this->app->make(DiscordWebhookChannel::class);
        });
    }
}
