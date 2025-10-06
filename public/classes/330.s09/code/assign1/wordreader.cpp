// CSC 330 Assignment 1 - wordreader.cpp
// Author:  Your name here
// Date: whenever

// Description?

#include <iostream>
#include <string>
#include <list>

using namespace std;

#include "d_stree.h"

// You can put your code here...

void findAndInc(list<pairClass> &data, const string &word)
{
    // ....
}


void processWords(list<pairClass> &data)
{
    // ....
}


int main()
{
    list<pairClass> wordCounts;

    while (cin) {
	string word;
	cin >> word;

	// When we read a word directly from "cin" as above, we get
	// the next continguous sequence of non-blank characters.  The
	// following code "normalizes" the word by removing any
	// leading and trailing non-letters and converting all
	// characters to lower-case.

	// First we count how many leading characters are not letters
	// and erase them

	int count = 0;
	string::iterator it=word.begin();
	while ((it != word.end()) && !isalpha(*it)) {
	    it++;
	    count++;
	}
	if (count > 0)
	    word.erase(0, count);

	// Next we do the same thing for trailing non-letters

	count = 0;
	it = word.end();
	while (it != word.begin()) {
	    it--;
	    if (isalpha(*it)) break;
	    count++;
	}
	if (count > 0)
	    word.erase(word.length()-count);

	// Finally, go through the remaining letters and convert to lower case

	for (it=word.begin(); it!=word.end(); it++) {
	    *it = tolower(*it);
	}

	// It's possible that we've just erased our whole word (if it
	// was a number, for example), so we only call the counting
	// function is the word is non-empty.

	if (word.length() > 0) {
	    findAndInc(wordCounts, word);
	}
    }

    // Wrap-up program - print out the full list of words

    processWords(wordCounts);

    return 0;
}
