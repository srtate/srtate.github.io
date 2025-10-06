#include <iostream>
#include <string>

using namespace std;

string plaintext = "OMITTED!";

int main(int argc, char *argv[])
{
    int ka = 0, kb = 0;  // These two values hold the secret key

    for (unsigned int i=0; i<plaintext.length(); i++) {
	int ctval = (ka * (unsigned char)plaintext[i] + kb)%256;
	cout << "\\" << oct << ctval;
    }
}
