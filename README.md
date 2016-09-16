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
* Match the first word with a second word that has one or two trailing punctuations (e.g., period, comma, colon, semicolon, parenthesis, bracket, curly bracket, quote, double quote, exclamation point, question mark)
  * Input: "hello", "hello?"" (look for words that conclude a quotation)
  * Output: true
* Determine the number of occurrences of a specified word within another specified group of words:
  * Input: "the", "In the room of percussion (The drums and The) Mallets speak to thee)" (includes examples of heterogenous case, preceding and trailing punctuation, and full word matches)
  * Output: 3

## Known Bugs

_{Are there issues that have not yet been resolved that you want to let users know you know?  Outline any issues that would impact use of your application.  Share any workarounds that are in place. }_

## Support and contact details

_{Let people know what to do if they run into any issues or have questions, ideas or concerns.  Encourage them to contact you or make a contribution to the code.}_

## Technologies Used

_{Tell me about the languages and tools you used to create this app. Assume that I know you probably used HTML and CSS. If you did something really cool using only HTML, point that out.}_

### License

The MIT License applies to this application.

Copyright (c) 2016 **_HK Kahng_**
