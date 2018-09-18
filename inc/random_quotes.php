<?php

$quotes = [
    ["quote" => "Together we can change the world, just one random act of kindness at a time.", "author" => "Ron Hall"],
    ["quote" => "Carry out a random act of kindness, with no expectation of reward, safe in the knowledge that one day someone might do the same for you.", "author" => "Princess Diana"],
    ["quote" => "I don't believe that if you do good, good things will happen. Everything is completely accidental and random. Sometimes bad things happen to very good people and sometimes good things happen to bad people. But at least if you try to do good things, then you're spending your time doing something worthwhile.", "author" => "Helen Mirren"],
    ["quote" => "I believe life is an intelligent thing: that things aren't random.", "author" => "Steve Jobs"],
    ["quote" => "A great deal of creativity is about pattern recognition, and what you need to discern patterns is tons of data. Your mind collects that data by taking note of random details and anomalies easily seen every day: quirks and changes that, eventually, add up to insights.", "author" => "Margaret Heffernan"],
    ["quote" => "I actually think that the most efficacious way of making a difference is to lead by example, and doing random acts of kindness is setting a very good example of how to behave in the world.", "author" => "Misha Collins"],
    ["quote" => "The world, when you look at it, it just can't be random. I mean, it's so different than the vast emptiness that is everything else, and even all the other planets we've seen, at least in our solar system, none of them even remotely resemble the precious life-giving nature of our own planet.", "author" => "Chris Hadfield"]
];

shuffle($quotes);

$randquote = array_pop($quotes);

?>