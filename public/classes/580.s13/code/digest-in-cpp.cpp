#include <iostream>
#include <iomanip>
#include <openssl/evp.h> 

using namespace std;

typedef unsigned char byte;

int main(int argc, char *argv[]) {
    const int DataLen = 30;
    EVP_MD_CTX ctx;
    byte digest[EVP_MAX_MD_SIZE];
    unsigned int outLen;

    byte* testdata = new byte[DataLen];
    for (int i=0; i<DataLen; i++) testdata[i] = 0;

    EVP_DigestInit(&ctx, EVP_sha256());
    EVP_DigestUpdate(&ctx, testdata, DataLen);
    EVP_DigestFinal(&ctx, digest, &outLen);

    for (unsigned int i=0; i<outLen; i++)
	cout << setfill('0') << setw(2) << hex << (int)digest[i];
    cout << dec << endl;

    return 0;
}
