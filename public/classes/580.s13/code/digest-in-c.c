#include <stdio.h>
#include <openssl/evp.h>

typedef unsigned char byte;

int main()
{
    EVP_MD_CTX ctx;
    const int DataLen = 30;
    byte digest[EVP_MAX_MD_SIZE];
    unsigned int outLen;
    int i;
    byte* testdata = (byte *)malloc(DataLen);

    for (i=0; i<DataLen; i++) testdata[i] = 0;

    EVP_DigestInit(&ctx, EVP_sha256());
    EVP_DigestUpdate(&ctx, testdata, DataLen);
    EVP_DigestFinal(&ctx, digest, &outLen);

    for (i=0; i<outLen; i++)
	printf("%02x", digest[i]);
    putchar('\n');

    return 0;
}
