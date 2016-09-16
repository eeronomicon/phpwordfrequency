# _Word Frequency_

#### _An exercise in BDD Specification and Test Development and Execution, 16 September 2016_

#### By _**HK Kahng**_

## Description

Exercise requirements are as follows:

Create a website in Silex that returns how frequently a word appears in a given string. The user should input both the word and the string of words to check. Check for full word matches only.

## Setup/Installation Requirements

* Download and unzip project
* Start php server with the web directory as the root
* Open a browser and navigate to the localhost root

## Specifications

* Determine whether the first word matches the next word
  * Input: "hello", "hello" (most basic match of identical words)
  * Output: true
* Determine whether the first word does not match the next word
  * Input: "hello", "goodbye" (determine non-match of inputs)
  * Output: false
* Check for full word matches
  * Input: "bread", "cornbreads" (the second word contains the first word within itself)
  * Output: false
* Match words regardless of upper/lowercase
  * Input: "heLLo", "HellO" (identical words with heterogenous casing)
  * Output: true
* Match strings that are not exclusively alphabetical words
  * Input: "wd-40", "WD-40" (words comprised of letters, numbers and symbols)
  * Output true
* Match first word with second word that has a single leading punctuation (e.g., quote, double quote, parenthesis, bracket, curly bracket)
  * Input: "Hello", ""Hello" (examine words that might be in a quotation)
  * Output: true
* Match the first word with a second word that has a trailing punctuation (e.g., period, comma, colon, semicolon, parenthesis, bracket, curly bracket, quote, double quote, exclamation point, question mark)
  * Input: "hello", "hello?" (look for words that conclude a sentence)
  * Output: true
* Determine the number of occurrences of a specified word within another specified group of words:
  * Input: "the", "The room of the percussions contains (The drums and The) Mallets for thee." (includes examples of heterogenous case, preceding and trailing punctuation, and full word matches)
  * Output: 4

## Known Bugs

While the application checks for leading and trailing punctuations, target words that have more than one leading or trailing punctuation (e.g., "Hello?!") will not be matched. While this is not necessarily a 'bug,' it is a limitation of the application at this time.

## Support and contact details

Contact me via GitHub!

## Technologies Used

This application uses PHP (Silex, Twig, and PHPUnit), HTML5, CSS, JavaScript, Bootstrap, and jQuery.

### License

The MIT License applies to this application.

Copyright (c) 2016 **_HK Kahng_**
