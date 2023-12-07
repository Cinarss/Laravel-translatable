# Multilingual Article Form with Laravel

This repository contains a Laravel project that showcases how to implement a multilingual article submission form using Bootstrap for a user-friendly interface.

## Overview

The form allows the submission of articles in multiple languages, leveraging Laravel's localization capabilities. It uses the `spatie/laravel-translatable` package to handle translations for the article's title and content.

## Features

- Dynamic form fields for multilingual input.
- Language selection via Bootstrap tabs.
- Clean and responsive Bootstrap styling.

## Implementation

The form is designed with the following structure:

```html
@foreach(config('languages') as $langCode => $langName)
    <li>
        <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
    </li>
@endforeach
Here, we loop through the configured languages and create a tab for each language. Each tab contains input fields for the article's title and content in the respective language.

The ArticleController handles the request and stores the article information in the database:


public function store(Request $request)
{
$article = new Article();

foreach (config('languages') as $langCode => $langName) {
$article->setTranslation('title', $langCode, $request->title[$langCode])
->setTranslation('content', $langCode, $request->content[$langCode]);
}

$article->save();

return redirect()->route('articles.index')->with('success', 'Article saved successfully');
}
Setup
To get started with this project:

Clone the repository.
Install the dependencies using composer install.
Configure your .env file with appropriate database connections.
Run the migrations php artisan migrate.
Start the development server php artisan serve.
Enjoy building and managing multilingual content with this Laravel setup!

Contribution
Feel free to fork this project, submit pull requests, or send suggestions to improve the code or functionality.


Ensure you replace the inline code with the actual code from your project, as the syntax highlighting in Markdown won't work correctly with the placeholder text.

To add this to your GitHub repository, you can simply create a new file named `README.md` in the root of your repository and paste this Markdown content into it. GitHub will automatically render the Markdown when you navigate to your repository's main page.
