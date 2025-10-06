// This file provides sample code for reading in a file character by
// character in Java, as needed by Assignment 1 in CSC 580 (Spring
// 2013). Note that I'm using a fixed-size array of characters for the
// input text so that the code can make multiple passes over the input
// easily, and I've allocated 1,000,000 characters for the input. All
// of the sample inputs provided for this assignment fit in this
// space, but if you were to use this with a larger file you will need
// to adjust the array size accordingly.

// Note that the input comes from standard input. Most likely the
// input is stored in a file, so you can run this program from the
// command line as follows (in either Windows or Unix/Linux):

//      java JavaSample <inputfile.txt >outputfile.txt

import java.io.*;

public class JavaSample {

    public static void main(String argv[]) {
	char input[] = new char[1000000];
	int inSize = 0;
	int ch = -1;
	do {
	    try {
		ch = System.in.read();
	    } catch (IOException e) {
		e.printStackTrace();
		System.exit(1);
	    }
	    if (ch >= 0) {
		input[inSize++] = (char)ch;
	    }
	} while (ch >= 0);

	// At this point the input that has been read from standard input is
	// in stored in the input[], which contains inSize characters.

    }
}
