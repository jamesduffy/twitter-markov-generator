Twitter Markov Generator
======

This is a simple and fun tool for logging into your twitter account and building a markov chain.


### Installation

Dependencies can be loaded by navigating to the project directory and calling `composer install`.

You will need to set up a Twitter Application:

1. Go to [https://dev.twitter.com](https://dev.twitter.com)
2. Find the "Manage your Apps" link near the bottom of the page
3. Create a new Application:
    - Give it a unique name and a description
    - Callback URL should be http://example.com/#/callback (replacing example.com with the location you are installing the application)
    - Get the consumer public and private keys and save them