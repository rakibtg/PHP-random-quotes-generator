<?php

  namespace RandomQuotes;

  class RandomQuotes {

    public function getRandomQuotes() {

      // Get the list of quotes.
      $quotes = file_get_contents( __DIR__ . '/../inc/quotes.json' );
      // Convert JSON document to PHP array.
      $quotes = json_decode( $quotes, true );
      // Get a random index number.
      $index = mt_rand( 0, count( $quotes ) );
      // Return the random quote.
      return $quotes[ $index ];

    }

    public function generate() {
      return $this->getRandomQuotes();
    }

  }