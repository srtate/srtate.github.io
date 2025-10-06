#include <iostream>

using namespace std;

class AESCipher {
public:
    static const int KEYLEN = 16;
    static const int BLOCKLEN = 16;

private:
    unsigned char keyCopy[KEYLEN];

public:
    void setKey(unsigned char key[]) {
        for (int i=0; i<KEYLEN; i++) {
            keyCopy[i] = key[i];
        }
    }

    void encrypt(unsigned char inBytes[], unsigned char outBytes[]) {
        for (int i=0; i<BLOCKLEN; i++)
            outBytes[i] = inBytes[i] ^ keyCopy[i];
    }
};


int main()
{
    unsigned char key[AESCipher::KEYLEN] = 
        {0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15};
    unsigned char plain[AESCipher::BLOCKLEN] = 
        {2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17};
    unsigned char cipher[AESCipher::BLOCKLEN];

    AESCipher aesObject;

    aesObject.setKey(key);
    aesObject.encrypt(plain, cipher);

    for (int i=0; i<AESCipher::BLOCKLEN; i++)
        printf("%02x ", (unsigned int)cipher[i]);
    putchar('\n');

    return 0;
}
