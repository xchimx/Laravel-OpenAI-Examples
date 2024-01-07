# About Laravel OpenAI Examples

This is a sample list of what OpenAI can do, based on Laravel 10, Tailwind, OpenAI-PHP and Laravel prompts

- [Laravel](https://laravel.com/)
- [Tailwind](https://laravel-livewire.com/)
- [OpenAI-PHP](https://github.com/openai-php/laravel)
- [Laravel prompts](https://github.com/laravel/prompts)

## Getting started
* clone project `git clone [...]`
* install dependencies `composer install`
* copy `.env` with `cp .env.example .env`
* generate app key `php artisan key:generate`
* setup api details in `.env`
* * OPENAI_API_KEY = get the [OpenAI API key](https://platform.openai.com/api-keys) 
* * OPENAI_ORGANIZATION = get the [OpenAI Organization key](https://platform.openai.com/account/organization) 
* set your credit balance in the OpenAI [billing settings](https://platform.openai.com/account/billing/overview)
* install assets `npm install`
* compile assets `npm run dev` or `npm run prod`
* set the storage link: `php artisan storage:link`
* have fun

## What can I do with the examples?
* Text: creates a poem and makes it funnier in the second step
* Audio: lets you prank a person or object and gives you an audio message back
* Image: lets you create images based on your text and expand them in the second step.
* Chatbot: you can also talk direct to the AI Chatbot via console: "php artisan chat"



